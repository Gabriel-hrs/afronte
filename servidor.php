<?php 
$ip = "127.0.0.1";
$login = "root";
$senha = "";
$banco = "system_user_afronte";
$conn = mysqli_connect( $ip, $login, $senha, $banco );

if( $conn ) {
    
} else {
    echo "Erro de conexão.";
}
?>