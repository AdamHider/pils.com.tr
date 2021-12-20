
ROBOCOPY "../../admin/view/template/extension/module/" "./upload/admin/view/template/extension/module/"  iss_header.twig
ROBOCOPY "../../admin/controller/extension/module/" "./upload/admin/controller/extension/module/"  iss_header.php


"%ProgramFiles%\WinRAR\WinRAR.exe" a -afzip -ep1 -ibck -r -y -x*.bat -x*.zip "../../../iSellSoft-Header1.0.ocmod.zip" "./*"
PAUSE