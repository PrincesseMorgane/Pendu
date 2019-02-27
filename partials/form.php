<?php ?>
<form action="index.php" method="post"> <!-- toujours vers index -->
    <fieldset>
        <legend>
            il te reste <?= $remainingTrials; ?> coups pour sauver ta peau
        </legend>
        <label for="triedletter">
            Choississez une lettre
        </label>
        <select name="triedletter" id="triedletter">
            <!--répéter 26 fois-->
            <?php foreach ($lettersArray as $letter => $status): ?>
                <?php if($status): ?>
                    <option value="<?= $letter ?>">
                        <?= $letter ?>
                    </option>
                <?php endif; ?>
            <?php endforeach; ?>
        </select>
        <input type="hidden" name="lettersArray" value="<?= $serializedLettersArray;?>">
        <input type="hidden" name="lettersCount" value="<?= $lettersCount; ?>">
        <input type="hidden" name="wordIndex" value="<?=$wordIndex?>">
        <input type="hidden" name="replacementString" value="<?= $replacementString ?>">
        <input type="hidden" name="triedLetters" value="<?= $triedLetters;?>">
        <input type="hidden" name="trials" value="<?= $trials;?>">
        <input type="submit" value="essayer la lettre">
    </fieldset>
</form>