<!doctype html>
<html lang="nl">

<head>
    <title>StoringApp / Meldingen / Nieuw</title>
    <?php require_once '../head.php'; ?>
</head>

<body>

    <?php require_once '../header.php'; ?>

    <div class="container">
        <h1>Nieuwe melding</h1>

        <form action="../backend/meldingenController.php" method="POST">
        
            <div class="form-group">
                <label for="attractie">Naam attractie:</label>
                <input type="text" name="attractie" id="attractie" class="form-input">
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <select name="type_" id="groep">
                    <option Value=""> - Kies een type - </option>
                    <option Value=""> - KinderAttractie - </options>
                    <option Value=""> - WaterAchtbaan - </options>
                    <option Value=""> - Horeca,Cafe,Overige - </options>
                    <option Value=""> - DraaiendAttractie - </options>
            </select>
            </div>
            <div class="form-group">
                <label for="capaciteit">Capaciteit p/uur:</label>
                <input type="number" min="0" name="capaciteit" id="capaciteit" class="form-input">
            </div>
            <div class="form-group">
                <label for="prioriteit">Prio:</label>
                <input type="checkbox" name="prioriteit" id="prioriteit">
                <label for="prioriteit">Melding met Prioriteit</label>
            <div class="form-group">
                <label for="melder">Naam melder:</label>
                <input type="text" name="melder" id="melder" class="form-input">
            </div>
            <div class="form-group">
                <label for="overige_info">overige info:</label>
                <textarea name="overige_info" id="overig" class="form-input" rows="4"></textarea>
            </div>
            <input type="submit" value="Verstuur melding">

        </form>
    </div>  

</body>

</html>
