<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             661e4253969e1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\DataType; use Pmpr\Module\StructuredData\Schema\CreativeWork\HowToDirection; use Pmpr\Module\StructuredData\Schema\CreativeWork\HowToTip; class Instruction extends DataType { const sueuicugaemqiksg = "\x74\x69\160"; const mwmmmioksayswakq = "\144\151\162\145\x63\x74\151\157\x6e"; protected $text; protected $type = self::mwmmmioksayswakq; protected $position; public function __construct(string $cmwygeyygwqaemaq, $kuuiuigeacouwmaa = 1) { if (!(is_string($cmwygeyygwqaemaq) && $cmwygeyygwqaemaq)) { goto yqykqysmiquwoasu; } $cmwygeyygwqaemaq = ltrim($cmwygeyygwqaemaq); if (!($cmwygeyygwqaemaq[0] == "\x23")) { goto cmqucgoewuyieoyk; } $cmwygeyygwqaemaq = rtrim(ltrim($cmwygeyygwqaemaq, "\43")); $this->type = self::sueuicugaemqiksg; cmqucgoewuyieoyk: $this->text = $cmwygeyygwqaemaq; yqykqysmiquwoasu: $this->position = $kuuiuigeacouwmaa; } public function ykgcioecqcwwkime() : ?string { return $this->text; } public function gueasuouwqysmomu() : ?string { return $this->type; } public function yqyeyqikcyswcaig() : ?int { return $this->position; } public function ggwmgmiswsqmcywi() : bool { return $this->gueasuouwqysmomu() == self::sueuicugaemqiksg; } public function uqeoyqiwywwmsiew() { switch ($this->gueasuouwqysmomu()) { case self::sueuicugaemqiksg: $aaqqkgyougeiueyq = new HowToTip(); goto ayyweymyuuiauamo; case self::mwmmmioksayswakq: default: $aaqqkgyougeiueyq = new HowToDirection(); goto ayyweymyuuiauamo; } mosqsmqimqgqoase: ayyweymyuuiauamo: $aaqqkgyougeiueyq->kguaimkyumsuesem($this->ykgcioecqcwwkime())->weakiuagguweamee($this->yqyeyqikcyswcaig()); return $aaqqkgyougeiueyq; } }
