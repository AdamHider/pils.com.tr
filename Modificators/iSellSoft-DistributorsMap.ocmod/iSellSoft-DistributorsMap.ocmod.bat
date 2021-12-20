ROBOCOPY "../../catalog/controller/extension/module/" "./upload/catalog/controller/extension/module/" distributors_map.php



ROBOCOPY "../../catalog\language\tr-tr\extension\module/" "./upload/catalog\language\tr-tr\extension\module/" distributors_map.php 

ROBOCOPY "../../catalog\language\en-gb\extension\module/" "./upload/catalog\language\en-gb\extension\module/" distributors_map.php

ROBOCOPY "../../catalog\language\ru-ru\extension\module/" "./upload/catalog\language\ru-ru\extension\module/" distributors_map.php 

ROBOCOPY "../../catalog/view/theme/default/template/extension/module/" "./upload/catalog/view/theme/default/template/extension/module/" distributors_map.twig


"%ProgramFiles%\WinRAR\WinRAR.exe" a -afzip -ep1 -ibck -r -y -x*.bat -x*.zip "../../../iSellSoft-DistributorsMap1.1.ocmod.zip" "./*"
PAUSE
