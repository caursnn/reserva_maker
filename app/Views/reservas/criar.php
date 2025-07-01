<!DOCTYPE html>
<html>
<head>
    <title>Nova Reserva</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <style>
        body { font-family: Arial; padding: 30px; }
        label { display: block; margin-top: 15px; }
        input, textarea { width: 100%; padding: 8px; }
        .hidden { display: none; }
    </style>
</head>
<body>
    <h1>Nova Reserva</h1>

    <form action="/reserva/salvar" method="post">
        <label>Data:</label>
        <input type="text" name="data" id="data" required>

        <div id="campos" class="hidden">
            <label>Hora de início:</label>
            <input type="time" name="hora_inicio" required>

            <label>Hora de fim:</label>
            <input type="time" name="hora_fim" required>

            <label>Descrição da atividade:</label>
            <textarea name="descricao" rows="4"></textarea>

            <label>ID do professor (temporário):</label>
            <input type="text" name="usuario_id" value="1" required>

            <label>ID do espaço (temporário):</label>
            <input type="text" name="espaco_id" value="1" required>

            <button type="submit" style="margin-top:20px;">Salvar Reserva</button>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        flatpickr("#data", {
            onChange: function(selectedDates, dateStr, instance) {
                document.getElementById('campos').classList.remove('hidden');
            }
        });
    </script>
</body>
</html>
