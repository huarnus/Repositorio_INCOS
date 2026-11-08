<?php
namespace Incos\Api;
final class ApiError extends \RuntimeException {
    public $status; public $details;
    public function __construct(int $status, string $message, array $details = []) { parent::__construct($message); $this->status=$status; $this->details=$details; }
}
final class Http {
    public static function json($data, int $status=200): void {
        http_response_code($status);
        header('Content-Type: application/json; charset=utf-8');
        header('Cache-Control: no-store'); header('X-Content-Type-Options: nosniff');
        echo json_encode($data, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES|JSON_INVALID_UTF8_SUBSTITUTE);
    }
    public static function body(): array {
        if (stripos($_SERVER['CONTENT_TYPE']??'', 'application/json')!==false) {
            $raw=file_get_contents('php://input');
            try { $data=json_decode($raw,false,512,JSON_THROW_ON_ERROR); }
            catch (\JsonException $e) { throw new ApiError(400,'JSON inválido.'); }
            if (!is_object($data)) throw new ApiError(400,'El cuerpo debe ser un objeto JSON.');
            return (array)$data;
        }
        return $_POST;
    }
    public static function id($value): int {
        if (!is_scalar($value) || !preg_match('/^[1-9][0-9]*$/D',(string)$value) || strlen((string)$value)>10) throw new ApiError(422,'Identificador inválido.');
        return (int)$value;
    }
}
