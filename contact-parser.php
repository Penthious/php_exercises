<?php

function parseContacts($filename){
    $contacts = [];
    $filename = 'contacts.txt';
    $handle = fopen($filename, 'r');
    $contacts = trim(fread($handle, filesize($filename)));
    $contactsArray = explode("\n", $contacts);
    foreach ($contactsArray as $key => $value) {
        $dataInfo = explode('|',$value);

        $firstThreeDigits = substr($dataInfo[1],0,3);
        $secondThreeDigits = substr($dataInfo[1],3,3);
        $thirdThreeDigits = substr($dataInfo[1],6,4);
        $dataInfo[1] = $firstThreeDigits . '-' . $secondThreeDigits .'-' . $thirdThreeDigits;

        $name = [
            'name'=> $dataInfo[0],
            'number' =>$dataInfo[1]
        ];
        $contactsArray[$key] = $name;
    }
    fclose($handle);
    return $contactsArray;
}


function contactInArray($fileName){
    $contactsParsed = [];
    $fileName = 'contacts.txt';
    $handle = fopen($fileName,'r');
    $contacts = trim(fread($handle, filesize($fileName)));
    $contactsArray = explode("\n", $contacts);
    foreach ($contactsArray as $key => $value) {
        $dataInfo = explode('|',$value);
        $name = [
            'name' => $dataInfo[0],
            'number' => $dataInfo[1]
        ];
        $contactsParsed[$key] = $name;

    }
    fclose($handle);
    return $contactsParsed;
}

print_r(parseContacts('contacts.txt'));
