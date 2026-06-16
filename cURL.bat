@echo off
set URL="https://verificate.prm.do/"
set TOKEN="your_auth_token"

curl -X DELETE %URL% -H "Authorization: Bearer %TOKEN%"
if %errorlevel% equ 0 (
    echo Resource deleted successfully.
) else (
    echo Error deleting resource.
)
pause