<?php

include __DIR__ . "/php.NET/package.php";

dotnet::AutoLoad(__DIR__ . "/config.ini.php");
dotnet::HandleRequest(new App(), new accessController());
