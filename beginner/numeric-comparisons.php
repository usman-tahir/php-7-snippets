<?php

// Integer comparison
print(1 <=> 1); // 0
print("<br>");
print(1 <=> 2); // 1
print("<br>");
print(2 <=> 1); // -1
print("<br>");

print("<br>");

// Float comparison
print(1.5 <=> 1.5); // 0
print("<br>");
print(1.5 <=> 2.5); // -1
print("<br>");
print(2.5 <=> 1.5); // 1
print("<br>");

print("<br>");

// String comparison
print("a" <=> "a"); // 0
print("<br>");
print("a" <=> "b"); // -1
print("<br>");
print("b" <=> "a"); // 1

?>