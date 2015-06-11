qsProj
======

Questionnaire on the web.

This project contains 2 parts: qsFront and qsBack.

As the name implies that the qsFront is support for the questionaire, and the qsBack is responsible for the data saving.

The qsFront uses php(just like to html), css, javascript to show questions, and use javascript(q.js) to push data to the qsBack, which is a django project.

The qsBack uses sqlite3(which is included in django) to save data.

This database just has 2 tables: person and the answer.
