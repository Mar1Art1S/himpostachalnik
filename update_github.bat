@echo off
echo Checking git status...
git status
echo.
echo Adding changes...
git add .
echo.
echo Committing changes...
git commit -m "Update codebase"
echo.
echo Pushing to GitHub...
git push
echo.
echo Done!
pause
