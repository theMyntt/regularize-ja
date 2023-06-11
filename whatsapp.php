<?php 
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"];
    
    $nome = trim($nome);
    $nome = urlencode($nome);
    
    $linkWhatsapp = "https://api.whatsapp.com/send?phone=551139926277&text=Olá,%20eu%20sou%20o(a) " . $nome . ", vim%20pelo%20seu%20site%20e%20gostaria%20de%20saber%20mais%20sobre%20o%20processo%20de%20regularização%20do%20meu%20imóvel.";
    
    header("Location: " . $linkWhatsapp);
    exit();
}
?>