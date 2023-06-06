# Design Patterns in PHP

![License MIT](https://img.shields.io/badge/license-MIT-blue.svg)
![PHP](https://img.shields.io/badge/php->=7.4-8892bf.svg)



## Cosa sono
---
Si tratta di soluzioni progettuali a problemi ricorrenti.


## Le caratteristiche di un design pattern
---
Un Design Pattern è composto di quattro parti fondamentali:
* Nome
* Problema
* Soluzione
* Conseguenze


## Nome
---
Una o più parole che lo identificano 


## Problema
---
Si tratta della descrizione della situazione nella quale il design pattern può essere applicato o in generale delle motivazioni del suo utilizzo.


## Soluzione
---
Si tratta della descrizione dell'insieme di classi e della interazione tra di esse che risolve il problema, senza scendere nei dettagli dell'implementazione.


## Conseguenze 
---
Risultati dell'applicazione del design pattern che possono influenzare la scelta di quale pattern utilizzare, oppure della implementazione in uno specifico linguaggio.


## A cosa servono
---
Il loro utilizzo permette di applicare soluzioni ampiamente collaudate, ottimizzando la struttura e la manutenzione del software.


## Classificazione dei design pattern
---
I design pattern sono classificati in base a due diversi criteri: 
* **ambito**: specifica se il pattern si applica alle `classi` o agli `oggettti`
* **scopo**: si tratta dell'obiettivo che il pattern punta ad ottenere: 
    * `creazione` di un oggetto, 
    * definizione della `struttura` di classi/oggetti o di una loro composizione,
    * definzione del modo in cui classi e oggetti si `comportano` e interagiscono tra di loro


## Classificazione dei design patterns tabella
---
<table border="1">
    <thead>
        <tr>
            <th colspan="2" rowspan="2"></th>
            <th colspan="3" style="text-align:center;">Scopo</th>
        </tr>
        <tr>
            <th>Creazione</th>
            <th>Struttura</th>
            <th>Comportamento</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th rowspan="2">Ambito</th>
            <th>Classi</th>
            <td>
                <ul>
                    <li>Facthory Method</li>
                </ul>
            </td>
            <td>
                <ul>
                    <li>Adapter (class)</li>
                </ul>
            </td>
            <td>
                <ul>
                    <li>Interpreter</li>
                    <li>Template Method</li>
                </ul>
            </td>
        </tr>
        <tr>
            <th>Oggetti</th>
            <td>
                <ul>
                    <li>Abstract Factory</li>
                    <li>Builder</li>
                    <li>Prototype</li>
                    <li>Singleton</li>
                </ul>
            </td>
            <td>
                <ul>
                    <li>Adapter (object)</li>
                    <li>Bridge</li>
                    <li>Composite</li>
                    <li>Decorator</li>
                    <li>Facade</li>
                    <li>Proxy</li>
                </ul>
            </td>
            <td>
                <ul>
                    <li>Chain of Responsability</li>
                    <li>Command</li>
                    <li>Iterator</li>
                    <li>Mediator</li>
                    <li>Memento</li>
                    <li>Flyweight</li>
                    <li>Observer</li>
                    <li>State</li>
                    <li>Strategy</li>
                    <li>Visitor</li>
                </ul>
            </td>
        </tr>
    </tbody>
</table>


## Licenza
---
Questo progetto sotto licenza MIT.