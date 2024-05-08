<?php

require 'connect.php';

$sql = "CREATE TABLE `users` (
    `id` int(11) NOT NULL,
    `nome` varchar(20) NOT NULL,
    `cognome` varchar(20) NOT NULL,
    `password` varchar(20) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
  
  --
  -- Dump dei dati per la tabella `users`
  --
  
  INSERT INTO `users` (`id`, `nome`, `cognome`, `password`) VALUES
  (1, 'samuele', 'tonello', 'Tonello05#'),
  (2, 'Riccardo', 'Andronaco', 'password'),
  (3, 'Ignazio', 'Mistretta', 'password');
  
  --
  -- Indici per le tabelle scaricate
  --
  
  --
  -- Indici per le tabelle `users`
  --
  ALTER TABLE `users`
    ADD PRIMARY KEY (`id`);
  
  --
  -- AUTO_INCREMENT per le tabelle scaricate
  --
  
  --
  -- AUTO_INCREMENT per la tabella `users`
  --
  ALTER TABLE `users`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
  COMMIT;
  ";

try {
    $conn->query($sql);
    echo 'succec';
} catch (\Throwable $th) {
    echo 'error';
}

  

?>