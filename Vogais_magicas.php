<!-- Caso 1 -->
<?php
function encontraSequenciaMagica($s) {
    $vogais = ['a', 'e', 'i', 'o', 'u'];
    $indice_vogal = 0;
    $maior_seq = 0;
    $seq_atual = 0;
    for ($i = 0; $i < strlen($s); $i++) {
        if ($s[$i] == $vogais[$indice_vogal]) {
            $seq_atual++;
            $indice_vogal++;
            if ($indice_vogal == 5) {
                $maior_seq = max($maior_seq, $seq_atual);
                $indice_vogal = 0;
                $seq_atual = 0;
            }
        }
    }
    return $maior_seq;
}

$s = "aeiaaioooaauuaeiou";
echo encontraSequenciaMagica($s);

?>

<!-- Caso 2 -->
<?php
function longestMagicSubsequence($s) {
    $vogais = ['a', 'e', 'i', 'o', 'u'];
    $indices = [0, 0, 0, 0, 0];
    $maxLength = 0;
    foreach (str_split($s) as $letter) {
        $index = array_search($letter, $vogais);
        if ($index !== false) {
            if ($index == 0 || $indices[$index - 1] > $indices[$index]) {
                $indices[$index]++;
                if ($indices[$index] > $maxLength) {
                    $maxLength = $indices[$index];
                }
            }
        }
    }
    return $maxLength;
}

$s = "aeiaaioooaa";
echo longestMagicSubsequence($s);

?>

<!-- Caso 3 -->
<?php
function magicSequenceLength($s) {
  $vowelCounts = array(0, 0, 0, 0, 0); 
  $magicSequence = 'aeiou'; 
  $longestMagicSequenceLength = 0; 
  $currentIndex = 0; 
  
  for ($i = 0; $i < strlen($s); $i++) {
    $letter = $s[$i];
    $vowelIndex = strpos('aeiou', $letter); 
    
    if ($vowelIndex !== false) {
      if ($vowelIndex === 0 || $vowelIndex === 1 || $vowelIndex === 2 || $vowelIndex === 3 || $vowelIndex === 4) {
        $vowelCounts[$vowelIndex]++;
        
        
        if ($letter === $magicSequence[$currentIndex]) {
          $currentIndex++;
        }
        
        
        if ($currentIndex === 5) {
          $longestMagicSequenceLength = max($longestMagicSequenceLength, array_sum($vowelCounts));
          $vowelCounts = array(0, 0, 0, 0, 0);
          $currentIndex = 0;
        }
      }
    }
  }
  
  return $longestMagicSequenceLength;
}

$s = "uioieeeaouiiuaeeuuiuuauuauaeaeuauaeaaiuoiouaeuiuuoooaeeaioeieoeooaeuooae";
echo magicSequenceLength($s);

?>

<!-- Caso 4 -->
<?php
function maior_sequencia_magica($s) {
    $vogais = "aeiou";
    $ponteiro1 = 0;
    $ponteiro2 = 1;
    $maiorSequencia = 0;
    
    while ($ponteiro2 < strlen($s)) {
        if (strpos($vogais, $s[$ponteiro1]) === false) {
           
            $ponteiro1++;
        } elseif ($s[$ponteiro2] === $vogais[strpos($vogais, $s[$ponteiro1]) + 1]) {
          
            $ponteiro1++;
            $ponteiro2++;
        } else {
           
            $ponteiro1++;
        }
        
        
        if ($ponteiro2 - $ponteiro1 === 5) {
            $maiorSequencia = max($maiorSequencia, 5);
        }
    }
    
    return $maiorSequencia;
}

$s = 
"iaaieeeoaueuaaaaieaooiiuiaueeoauiueuaeiaouiueoouaeeioeieoeeiiiouiaioiaeeaaaeaouiioiueuoieeoeoiuuuouiaoea
aeeeiueuiueiaieuoueoeooiuoooiooouuuoiuoeiuaouoeaaaiaeueaiaeouuaeioeoaeeuuaeouiauaiaoioueeiauuieouoe
uoiiooauoeaoieuieiaooaaieuoauueoeueeauuaaueeeeeoooouueoiaauooioioaeiiuaiueeoaeiuiaouieiueuae";

echo maior_sequencia_magica($s);
?>

<!-- Caso 5 -->
<?php
function magic_sequence($s) {
    $vowels = 'aeiou';
    $vowels_len = strlen($vowels);
    $s_len = strlen($s);
    $vowels_idx = 0;
    $max_len = 0;
    
    for ($i = 0; $i < $s_len; $i++) {
        if ($s[$i] === $vowels[$vowels_idx]) {
            $vowels_idx++;
            if ($vowels_idx === $vowels_len) {
                $max_len = $vowels_len;
                break;
            }
        }
    }
    
    return $max_len;
}

$s = 'ioeueooeuieoaioeoooiioieueoaiieaeaoeioiiaueueiououeiueeaaueeueaeoaaaouoeoieouaauooeuuoeauuaauaeoeeuiueeeuiieooeuaooeiaeueaaaaiooeaoiiiaaaooeiioaiiieieauaoeuiiueuioouuaoaioeiaiaaaaoeeaiuiaeoiiuauiiaeiuuaoa' .
     'eaaaaeoeueieoaaaooueioaauieieouoeouieaueuuaiiueoouioueuaaauaoeueuoouieuuouuoueoaaeuuouueieuouiooaiuaoeuaeiaueuuieeiuaaeuiuuiuoiaiaeauuuaeeuuuuoieoieuaoiiuoeiaeaeeauoueaiuooiaoaiuoouoeeueeuaoeueiaiioiouueeaaoeoeauouuieeoaoioauieeeieeaaiuiaaeiaeueuouuaoaoiiaoeoaoeuieeouiiiiauauueaeouaeeeaoeaaaeouuueoeoiueeoeiouaoeaaeeoaeaiiuouoaaeiuaiaeueuauaoauueuoeueueauuuueeeeuaouaaueaiouoeuooeiouoiiiueauauaeuaauuoeuoaeeouoouoeeeoieoaouiaaioiuoeuaaouuiioieoiiaueueuieouaiioeuaeoeieaoeiuooueeoeuueueioaoaauoooiiueueooeuouauuaiuiaoieeeeoouoeiaaaeieiooeouioeuooeeiauouueiuieaeaieeooaoeiuu';
echo magic_sequence($s);


?>