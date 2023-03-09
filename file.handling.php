<?php
const BR ='<br>';
//firts parameter is  the filename
//modes comes in the first parameter
//r-read onlt
//w-opens a file for writinferrases the document that was there initially 
//a-opens a file for writinf appends to  the document that was there initially 
//x-creates a new file for write only 
$file=fopen("names.txt","r");
//fread()-reads from an  open file
//first parameter is the file where it reads from and the second parameter is the maximum bites to read
echo fread($file,filesize("names.txt"));

//used to read a single line from file
echo BR;
echo fgets($file);
 //checks  if the end of file has been reached
 //its useful for looping through data of unknown length
echo BR;
while(!feof($file)){
    echo fgets($file).BR;
}

//used to read a single character froma file

echo BR;
while(!feof($file)){
    echo fgetc($file).BR;
}
//fopen()-is also used to create a file
//$file=fopen('country.text','w');

//fwrite()-is used to write to a file
//first parameter is the name of the file to write to and the second paramer is the text 
$file=fopen("country.txt","w");
$text='german,kenya,uganda,tanzania';
 fwrite($file,$text);

 //the belowe code will append data to the given file
 $file=fopen("country.txt","a");
$text='nigeria,ghana,senegal,tunisia';
 fwrite($file,$text);
 //rename()i a function used to rename a file
 //first parameter spacifies the file to be rnames and the second parameter spacifies the new name
 rename('country.txt','Africa.tst');

 //to copy a file you use the copy()
 //firts parameter is the the path to copy from second spacifies the file to copy to the target file is overwrritten
copy('names.txt','Africa.tst');
//unlink()-is used to delete a file spacified in its parameters
unlink('Africa.tst');
//fclose()-is used to close an opened file
//item passed must be the name of the file 
echo fclose($file);
?>