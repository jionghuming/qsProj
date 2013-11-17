qsProj
======

A web questionnaire.

This project contains 2 parts: qsFront, qsBack. And as the names implies the qsFront support for the questionaire, and qsBack is responsible of the data saving.  

qsFront use php(just same to html),css,javascript to show the question, and use javascript(q.js) to push data to the qsBack, which is a django project.

qsBack is a django project and it use sqlite3(which is included in django) to save data. This database just has 2 tables: person and the answer.