<?php

#funcja pomocnicza wykonująca obliczenia
function obliczeniapolozenia($szerokosc, $wysokosc, $promien){
    
#proporcje piksela w stosunku szerokości do wysokości
$pxlaspectratio=2;

$potegapromien=($promien**2);

#wyliczanie położenia znaków
$wynik = ($szerokosc**2)*($pxlaspectratio**2)/$potegapromien +($wysokosc**2/$potegapromien);
return $wynik;      
}
        
function okrag($promien){
    #zagnieżdżona petla tworząca dwuwymiarową siatkę znaków
    for ($szerokosc=-$promien/2; $szerokosc<=$promien/2; $szerokosc++)
    {
        for ($wysokosc= -$promien; $wysokosc<=$promien; $wysokosc++)
        {
            #wywoływanie funkcji do obliczania położenia znaków
            $wynikobliczen = obliczeniapolozenia($szerokosc, $wysokosc,$promien);
            /*
            instrukcja warunkowa, która sprawdza wartość z przedziału 0.95 do 1.1
            gdy wartość znajduje się w przedziale, to zostaje wypisany w konsoli znak
            */
            if ($wynikobliczen>0.95 && $wynikobliczen<1.1)
            {
                echo "0";
            }
            else
            {
                echo " ";
            }
        }
        echo "\r\n";
    }
}

okrag(10);

?>