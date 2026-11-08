<style>
    h1, h2, p {
        margin: 0;
        padding: 0;
    }

    .proyecto-container {
        border: 1px solid #ddd;
        background-color: #fff;
        padding: 20px;
        margin: 20px;
        width: 100%;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    form {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    input[type="text"], textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: none;
    }

    input[type="text"][readonly] {
        background-color: #eee;
    }

    h1 {
        color: #4285f4;
    }

    h2 {
        color: #333;
    }

    /* Nueva clase para contenedor de columnas */
    .column-container {
        display: flex;
        justify-content: space-between;
    }

    /* Nueva clase para cada columna */
    .column {
        width: 48%; /* Ajusta según sea necesario, puedes probar diferentes valores */
    }
</style>



