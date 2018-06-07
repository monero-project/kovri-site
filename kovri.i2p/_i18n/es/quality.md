El siguiente modelo es el propuesto para el trabajo de QA. Mientras se tiene una naturaleza linear, cualquier fase puede ser trabajada individualmente si se necesita - mientras que todas las fases eventualmente son revisadas.

## Fase 1: Revisión básica

- Todo el código debe adherirse a nuestras guías de contribución
- Anotar todas las areas que necesitan ser mejoradas (mentalmente o en el código)
- Crear TODOs y asignarse de ser posible

## Fase 2: Revisión de especificaciones / Implementación / Documentacion de código

- Completa las revisiones de especificaciones por modulos; ejemplo: Streaming, I2PControl, etc.
  - El código debe estar en-linea con las partes esenciales de las especificaciones que se mantendrán iguales (o en mejores) niveles de anonimato que provee java I2P
  - Refactorizar/implementar/parchear donde/cuando se necesite.
- Asegurarse implementacion acorde con C++11/14
  - Fase 2 de revisión si se necesita
- Resolver todo lo relacionado a los TODOs
- Documentar el código tanto como sea posible con comentarios en-linea y Doxygens
  - El código debe ser entendible desde programadores novatos a experimentados
  - El código debe guiar al lector a un mejor entendimiento de I2P
    - I2P es un código muy largo y complejo, así que el nuestro debe ser un reemplazo de de documentación y no simplemente un suplemento (esto puede ser un objetivo tedioso pero muy beneficioso en términos de mantenimiento y vida del software)

## Fase 3: Revisión criptográfica / auditoría de seguridad

- Asegurarse que la criptografía esté al día y correctamente implementada
- Establecer cada vector para explotaciones conocidas
  - Mantener esos vectores en mente cuando se escriban pruebas
- Romper Kovri en cada forma posible
  - Arreglar lo que rompes
- Siempre usa librerías de confianza, y bien escritas cuando sea posible
  - Evita código hecho-en-casa, ad-hoc, *Yo sé mas que la comunidad, por eso mi código es mejor*
- Busca una segunda, tercera y mas opiniones, antes de proceder a la siguiente fase

## Fase 4: Arreglar bugs / Pruebas / Profiling

- Resolver los bugs/issues de prioridad
- Escribir pruebas de unit-test para cada modulo
  - Correr pruebas, y correrlas de nuevo
  - Revisa los resultados por completo. Parchea si se necesita, refactoriza si es necesario
- Asegúrate que la automatización esté corriendo a intervalos regulares
  - Parchea si es necesario, refactoriza si es necesario

## Fase 5: Conferir

- Conferir con colegas y la comunidad
  - Conferir debe ser publicamente via tickets, reuniones y/o IRC
- Aceptar toda retro-alimentacion y, en respuesta, producir resultados tangibles
- Si se satisface, proceder con la siguiente fase, si no repetir esta fase, (o comenzar de una fase previa)

## Fase 6: Repetir todo desde el inicio
