@echo off
color 0a
mode 70,30


:inicio
cls
echo --------------------
echo iniciando servidor...
echo --------------------

cd Arquivos de Programas(x86)\Google\Chrome\Application
start chrome.exe http://127.0.0.1:8000/

cd C:\Users\leand\Documents\Projetos\relatorios_bia
php artisan serve
pause
