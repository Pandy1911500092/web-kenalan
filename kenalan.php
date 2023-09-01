<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $response = $_POST["response"];
        
        if ($response == "ya") {
            // Redirect to WhatsApp chat link
            header("Location: https://wa.me/6282372421673");
            exit;
        } elseif ($response == "tidak") {
            echo "Oke, mungkin lain kali.";
            exit;
        }
    }
    ?>
    
    <p>Hai, boleh kenalan?</p>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <input type="radio" name="response" value="ya">Ya
        <input type="radio" name="response" value="tidak">Tidak
        <br>
        <input type="submit" value="Jawab">
    </form>
</body>
</html>