@echo off
set URL="your_api_endpoint/resource_id"
set TOKEN="your_auth_token"

curl -X DELETE %URL% -H "Authorization: Bearer %TOKEN%"
if %errorlevel% equ 0 (
    echo Resource deleted successfully.
) else (
    echo Error deleting resource.
)
pause