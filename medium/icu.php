<?php

printf('%x', IntlChar::CODEPOINT_MAX); // 10ffff
printf(IntlChar::charName('@')); // COMMERCIAL AT
print(IntlChar::ispunct('!')); // true

?>