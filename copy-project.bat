@echo off
rd /S /Q c:\wamp\www\seguimiento_proyectos\
xcopy seguimiento_proyectos c:\wamp\www\seguimiento_proyectos\ /E
#pause