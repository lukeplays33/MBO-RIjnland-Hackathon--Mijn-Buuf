import './localForage.js';

let i, j, a;

function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}

function download(filename, text) {
    var element = document.createElement('a');
    element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(text));
    element.setAttribute('download', filename);

    element.style.display = 'none';
    document.body.appendChild(element);

    element.click();

    document.body.removeChild(element);
}

let testScores = {
    "Gezondheid": {
        "1": {
            "antwoord": "ja",
            "zwaarte": 20
        },
        "2": {
            "antwoord": "ja",
            "zwaarte": 20
        },
        "3": {
            "antwoord": "2",
            "zwaarte": 8
        },
        "4": {
            "antwoord": "2",
            "zwaarte": 0
        },
        "5": {
            "antwoord": "2",
            "zwaarte": 12
        }
    },
    "Wonen": {
        "1": {
            "antwoord": "ja",
            "zwaarte": 20
        },
        "2": {
            "antwoord": "nee",
            "zwaarte": 0
        },
        "3": {
            "antwoord": "1",
            "zwaarte": 4
        },
        "4": {
            "antwoord": "5",
            "zwaarte": 20
        },
        "5": {
            "antwoord": "ja",
            "zwaarte": 20
        }
    },
    "Werken": {
        "1": {
            "antwoord": "nee",
            "zwaarte": 0
        },
        "2": {
            "antwoord": "nee",
            "zwaarte": 0
        },
        "3": {
            "antwoord": "2",
            "zwaarte": 8
        },
        "4": {
            "antwoord": "2",
            "zwaarte": 0
        },
        "5": {
            "antwoord": "2",
            "zwaarte": 12
        }
    }, "Taal": {
        "1": {
            "antwoord": "ja",
            "zwaarte": 20
        },
        "2": {
            "antwoord": "ja",
            "zwaarte": 20
        },
        "3": {
            "antwoord": "2",
            "zwaarte": 8
        },
        "4": {
            "antwoord": "2",
            "zwaarte": 0
        },
        "5": {
            "antwoord": "2",
            "zwaarte": 12
        }
    }, "SocialeContacten": {
        "1": {
            "antwoord": "ja",
            "zwaarte": 20
        },
        "2": {
            "antwoord": "ja",
            "zwaarte": 20
        },
        "3": {
            "antwoord": "2",
            "zwaarte": 8
        },
        "4": {
            "antwoord": "2",
            "zwaarte": 0
        },
        "5": {
            "antwoord": "2",
            "zwaarte": 12
        }
    }, "Veiligheid": {
        "1": {
            "antwoord": "ja",
            "zwaarte": 20
        },
        "2": {
            "antwoord": "ja",
            "zwaarte": 20
        },
        "3": {
            "antwoord": "2",
            "zwaarte": 8
        },
        "4": {
            "antwoord": "2",
            "zwaarte": 0
        },
        "5": {
            "antwoord": "2",
            "zwaarte": 12
        }
    }

}

let score = 0;
for (i of Object.keys(testScores)) {
    score = 0;

    for (j of Object.keys(testScores[i])) {
        for (a of Object.keys(testScores[i][j])) {

            if (a == 'zwaarte') {
                score = score + testScores[i][j][a];
                document.getElementById(i).style.height = `${score}%`;
                document.getElementById(i).innerHTML = `${i} - ${score}%`;
                document.getElementById(i).style.backgroundColor = getRandomColor();
            }
        }
    }
}

document.getElementById('exporteer').onclick = function () {
    let naam = prompt('Typ bestands naam.');
    download(`${naam}.txt`, JSON.stringify(testScores));
}

document.getElementById('opslaan').onclick = function () {
    let naam = prompt('Typ sleutel naam.');
    localforage.setItem(naam, JSON.stringify(testScores), function (err) {
        // if err is non-null, we got an error
      });
}
