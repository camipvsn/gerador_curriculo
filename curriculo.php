<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículo</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <button id="botao-pdf" onclick="window.print()">Baixar PDF</button>

    <h1>Currículo de <?= htmlspecialchars($_POST['nome']); ?></h1>

    <h2>Dados Pessoais</h2>
    <p><strong>Email:</strong> <?= htmlspecialchars($_POST['email']); ?></p>
    <p><strong>Telefone:</strong> <?= htmlspecialchars($_POST['telefone']); ?></p>
    <p><strong>Idade:</strong> <?= htmlspecialchars($_POST['idade']); ?></p>
    <p><strong>Data de Nascimento:</strong> <?= htmlspecialchars($_POST['nasc']); ?></p>

    <h2>Experiências Profissionais</h2>
    <ul>
        <?php
        if (isset($_POST['cargo'])) {
            for ($i = 0; $i < count($_POST['cargo']); $i++) {
                if (!empty($_POST['cargo'][$i])) {
                    echo "<li>";
                    echo htmlspecialchars($_POST['cargo'][$i]) . " - " .
                         htmlspecialchars($_POST['empresa'][$i]) . " (" .
                         htmlspecialchars($_POST['periodo'][$i]) . ")";
                    echo "</li>";
                }
            }
        }
        ?>
    </ul>

    <h2>Formação Acadêmica</h2>
    <ul>
        <?php
        if (isset($_POST['curso'])) {
            for ($i = 0; $i < count($_POST['curso']); $i++) {
                if (!empty($_POST['curso'][$i])) {
                    echo "<li>";
                    echo htmlspecialchars($_POST['curso'][$i]) . " - " .
                         htmlspecialchars($_POST['instituicao'][$i]) . " (" .
                         htmlspecialchars($_POST['conclusao'][$i]) . ")";
                    echo "</li>";
                }
            }
        }
        ?>
    </ul>

</body>
</html>