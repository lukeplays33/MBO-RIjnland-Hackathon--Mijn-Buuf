import '../AI/Brain.js';

let i, j, a, d;

let output;

let feedbackText = document.getElementById('feedbackText');

let testScores = {
    "Gezondheid": {
        "1": {
            "antwoord": "ja",
            "zwaarte": 20
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
            "zwaarte": 4
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

// 0 = Gezondheid

let replies = {
    0: {
        1: "Lichaams beweging zorgt ervoor dat je je energiek en gezond voelt, probeer wat vaker te sporten of met vrienden te wandelen.",
        2: "",

        3: "Een zorgverzering helpt je met het betalen van je nodige zorg, je kan een zorgverzekering halen bij b.v. vgz.nl",
        4: "",

        5: "Ga naar een dokter voor een mogelijk onderzoek, een dokter zal je altijd helpen met je gezondheid.",
        6: "Zoek hulp bij vrienden of zie een arts.",
        7: "Praat erover met iemand.",
        8: "", // empty
        9: "", // empty

        10: "Ga naar een dokter een dokter zal je altijd helpen met je gezondheid.",
        11: "Zoek hulp bij een dokter als je niet lekker bent of ziek voelt.",
        12: "Zoek hulp bij vrienden of familie.",
        13: "", // empty
        14: "", // empty

        15: "Lichaamelijke beweging zorgt voor een energiek gevoel, ga wat vaker bewegen.",
        16: "Ga een dag extera lichaamelijke beweging doen, als dat lukt natuurlijk.",
        17: "", // empty
        18: "", // empty
        19: "", // empty
    },
    1: {
        1: "Zoek iemand die je vertrouwd en met wie je kan praten, ga eventueel het huis uit.",
        2: "",

        3: "Zorg voor items die je meer privacy kunnen geven zoals b.v. een doek om je af te schermen tijdens het omkleeden of zet een wachtwoord op je telefoon.",
        4: "",

        5:"Probeer schoon te maken, vraag vrienden of een schoonmaak hulp om te helpen.",
        6:"Probeer schoon te maken en laat niet e veel afval achter om erger te voorkomen.",
        7:"",
        8:"",
        9:"",

        10:"Zoek iemand die je kan helpen met je geld en vraag om hulp bij de regering die zullen je altijd helpen of een uitkeering geven.",
        11:"Zoek iemand die je kan helpen met je geld.",
        12:"",
        13:"",
        14:"",

        15: "Laat iemand langskomen om b.v. te kijken waarom ze geen water hebben of laat hulp komen.",
        16: "",
    },
    2: {
        1: "Vraag/Geef door wat er verbeterd kan worden dan zouden we er mischien wat aan kunnen doen.",
        2: "",

        3: "GEef aan/Vraag om extra hulp of om uitleg.",
        4: "",

        5:"",
        6:"",
        7:"Vraag/Geef aan waarom je het niet nuttig vindt, mischien kunnen we je helpen.",
        8:"Vraag/Geef aan waarom je het niet nuttig vindt, mischien kunnen we je helpen.", // text
        9:"Vraag/Geef aan waarom je het niet nuttig vindt, mischien kunnen we je helpen.", // text

        10: "", // geen feedback nodig
        11: "", // geen feedback nodig

        12:"Vraag/geef door wat er beter kan of wat hij/zij/hen er graag bij zou willen hebben.",
        13:"Vraag/geef door wat er beter kan of wat hij/zij/hen er graag bij zou willen hebben.",
        14:"",
        15:"",
        16:"",

    },
    3: {
        1: "Vraag/Geef aan wat er moeilijk gaat.",
        2: "",

        3: "",
        4: "",

        5:"Vraag/Geef hulp of kijk of je ergens lessen kan volgen, of vraag/ geef een uitleg van wat een woord betekent.",
        6:"Vraag/ geef een uitleg van wat een woord betekent.",
        7:"",
        8:"",
        9:"",

        10: "Als het Nederlands er goed in zit probeer om meer Nederlands te praten / moedig iemand aan om Nederlands te praten.",
        11: "",

        12:"",
        13:"",
        14:"",
        15:"",
        16:"",
    },
    4: {
        1: "Probeer/Moadig aan om meer te praten met mensen die ze mischien niet kennen, als het nodig is kun je ook medewerkers/vrienden aan moadigen om te praten.",
        2: "",

        3: "",
        4: "",

        5: "",
        6: "Kijk of er ergens gepraat kan worden over je gevoelens, samen kan er naar gekeken worden om je beter te laten voelen.",

        7: "",
        8: "",

        9: "",
        10: "",
    },
    5: {
        1:"Praat/of vraag over hoe je je voelt als je op straat loopt.",
        2:"Praat/of vraag over hoe je je voelt als je op straat loopt.",
        3:"",
        4:"",
        5:"",

        6:"Praat/of vraag over hoe je je voelt als je in je huis bent.",
        7:"Praat/of vraag over hoe je je voelt als je in je huis bent.",
        8:"",
        9:"",
        10:"",

        11:"",
        12:"",
        13:"",
        14:"",
        15:"",

        16:"Praat/Vraag erover samen kan er wta aan gedaan worden.",
        17:"Praat/Vraag erover samen kan er wta aan gedaan worden.",
        18:"Praat/Vraag erover samen kan er wta aan gedaan worden.",
        19:"",
        20:"",

        21:"Praat/Vraag erover samen kan er wta aan gedaan worden.",
        22:"Praat/Vraag erover samen kan er wta aan gedaan worden.",
        23:"Praat/Vraag erover samen kan er wta aan gedaan worden.",
        24:"",
        25:"",
    }
}

// Sample dataset
let net = new brain.NeuralNetwork();

net.train([
    { input: [0.0, 0.10, 0.0], output: { 1: 1 } },
    { input: [0.0, 0.10, 0.20], output: { 2: 1 } },

    { input: [0.0, 0.20, 0.0], output: { 3: 1 } },
    { input: [0.0, 0.20, 0.20], output: { 4: 1 } },

    { input: [0.0, 0.30, 0.20], output: { 5: 1 } },
    { input: [0.0, 0.30, 0.16], output: { 6: 1 } },
    { input: [0.0, 0.30, 0.12], output: { 7: 1 } },
    { input: [0.0, 0.30, 0.8], output: { 8: 1 } },
    { input: [0.0, 0.30, 0.4], output: { 9: 1 } },

    { input: [0.0, 0.40, 0.4], output: { 10: 1 } },
    { input: [0.0, 0.040, 0.8], output: { 11: 1 } },
    { input: [0.0, 0.40, 0.12], output: { 12: 1 } },
    { input: [0.0, 0.40, 0.16], output: { 13: 1 } },
    { input: [0.0, 0.40, 0.20], output: { 14: 1 } },

    { input: [0.0, 0.50, 0.4], output: { 15: 1 } },
    { input: [0.0, 0.50, 0.8], output: { 16: 1 } },
    { input: [0.0, 0.50, 0.12], output: { 17: 1 } },
    { input: [0.0, 0.50, 0.16], output: { 18: 1 } },
    { input: [0.0, 0.50, 0.20], output: { 19: 1 } },

    { input: [0.1, 0.10, 0.0], output: { 1: 1 } },
    { input: [0.1, 0.10, 0.20], output: { 2: 1 } },

    { input: [0.1, 0.20, 0.0], output: { 3: 1 } },
    { input: [0.1, 0.20, 0.20], output: { 4: 1 } },

    { input: [0.1, 0.30, 0.4], output: { 5: 1 } },
    { input: [0.1, 0.30, 0.8], output: { 6: 1 } },
    { input: [0.1, 0.30, 0.12], output: { 7: 1 } },
    { input: [0.1, 0.30, 0.16], output: { 8: 1 } },
    { input: [0.1, 0.30, 0.20], output: { 9: 1 } },

    { input: [0.1, 0.40, 0.4], output: { 10: 1 } },
    { input: [0.1, 0.40, 0.8], output: { 11: 1 } },
    { input: [0.1, 0.40, 0.12], output: { 12: 1 } },
    { input: [0.1, 0.40, 0.16], output: { 13: 1 } },
    { input: [0.1, 0.40, 0.20], output: { 14: 1 } },

    { input: [0.1, 0.50, 0.0], output: { 15: 1 } },
    { input: [0.1, 0.50, 0.20], output: { 16: 1 } },

    { input: [0.2, 0.10, 0.0], output: { 1: 1 } },
    { input: [0.2, 0.10, 0.20], output: { 2: 1 } },

    { input: [0.2, 0.20, 0.0], output: { 3: 1 } },
    { input: [0.2, 0.20, 0.20], output: { 4: 1 } },

    { input: [0.2, 0.30, 0.4], output: { 9: 1 } },
    { input: [0.2, 0.30, 0.8], output: { 8: 1 } },
    { input: [0.2, 0.30, 0.12], output: { 7: 1 } },
    { input: [0.2, 0.30, 0.16], output: { 6: 1 } },
    { input: [0.2, 0.30, 0.20], output: { 5: 1 } },

    { input: [0.2, 0.40, 0.0], output: { 10: 1 } },
    { input: [0.2, 0.40, 0.20], output: { 11: 1 } },

    { input: [0.2, 0.50, 0.4], output: { 12: 1 } },
    { input: [0.2, 0.50, 0.8], output: { 13: 1 } },
    { input: [0.2, 0.50, 0.12], output: { 14: 1 } },
    { input: [0.2, 0.50, 0.16], output: { 15: 1 } },
    { input: [0.2, 0.50, 0.20], output: { 16: 1 } },

    { input: [0.3, 0.10, 0.0], output: { 1: 1 } },
    { input: [0.3, 0.10, 0.20], output: { 2: 1 } },

    { input: [0.3, 0.20, 0.0], output: { 1: 1 } },
    { input: [0.3, 0.20, 0.20], output: { 2: 1 } },

    { input: [0.3, 0.30, 0.4], output: { 9: 1 } },
    { input: [0.3, 0.30, 0.8], output: { 8: 1 } },
    { input: [0.3, 0.30, 0.12], output: { 7: 1 } },
    { input: [0.3, 0.30, 0.16], output: { 6: 1 } },
    { input: [0.3, 0.30, 0.20], output: { 5: 1 } },

    { input: [0.3, 0.40, 0.0], output: { 10: 1 } },
    { input: [0.3, 0.40, 0.20], output: { 11: 1 } },

    { input: [0.3, 0.50, 0.4], output: { 12: 1 } },
    { input: [0.3, 0.50, 0.8], output: { 13: 1 } },
    { input: [0.3, 0.50, 0.12], output: { 14: 1 } },
    { input: [0.3, 0.50, 0.16], output: { 15: 1 } },
    { input: [0.3, 0.50, 0.20], output: { 16: 1 } },

    { input: [0.4, 0.10, 0.0], output: { 1: 1 } },
    { input: [0.4, 0.10, 0.20], output: { 2: 1 } },

    { input: [0.4, 0.20, 0.0], output: { 3: 1 } },
    { input: [0.4, 0.20, 0.20], output: { 4: 1 } },

    { input: [0.4, 0.30, 0.0], output: { 5: 1 } },
    { input: [0.4, 0.30, 0.20], output: { 6: 1 } },

    { input: [0.4, 0.40, 0.0], output: { 7: 1 } },
    { input: [0.4, 0.40, 0.20], output: { 8: 1 } },

    { input: [0.4, 0.50, 0.0], output: { 9: 1 } },
    { input: [0.4, 0.50, 0.20], output: { 10: 1 } },

    { input: [0.5, 0.10, 0.4], output: { 1: 1 } },
    { input: [0.5, 0.10, 0.8], output: { 2: 1 } },
    { input: [0.5, 0.10, 0.12], output: { 3: 1 } },
    { input: [0.5, 0.10, 0.16], output: { 4: 1 } },
    { input: [0.5, 0.10, 0.20], output: { 5: 1 } },

    { input: [0.5, 0.20, 0.4], output: { 6: 1 } },
    { input: [0.5, 0.20, 0.8], output: { 7: 1 } },
    { input: [0.5, 0.20, 0.12], output: { 8: 1 } },
    { input: [0.5, 0.20, 0.16], output: { 9: 1 } },
    { input: [0.5, 0.20, 0.20], output: { 10: 1 } },

    { input: [0.5, 0.30, 0.4], output: { 11: 1 } },
    { input: [0.5, 0.30, 0.8], output: { 12: 1 } },
    { input: [0.5, 0.30, 0.12], output: { 13: 1 } },
    { input: [0.5, 0.30, 0.16], output: { 14: 1 } },
    { input: [0.5, 0.30, 0.20], output: { 15: 1 } },

    { input: [0.5, 0.40, 0.4], output: { 16: 1 } },
    { input: [0.5, 0.40, 0.8], output: { 17: 1 } },
    { input: [0.5, 0.40, 0.12], output: { 18: 1 } },
    { input: [0.5, 0.40, 0.16], output: { 19: 1 } },
    { input: [0.5, 0.40, 0.20], output: { 20: 1 } },

    { input: [0.5, 0.50, 0.4], output: { 21: 1 } },
    { input: [0.5, 0.50, 0.8], output: { 22: 1 } },
    { input: [0.5, 0.50, 0.12], output: { 23: 1 } },
    { input: [0.5, 0.50, 0.16], output: { 24: 1 } },
    { input: [0.5, 0.50, 0.20], output: { 25: 1 } },
]);

for (i of Object.keys(testScores)) {
    feedbackText.innerHTML = feedbackText.innerHTML + `<br><br><i><b>${i}:</b></i>
    <br><br>`;

    for (j of Object.keys(testScores[i])) {
        for (a of Object.keys(testScores[i][j])) {

            if (a == 'zwaarte') {
                let predictValue = ['0.' + Object.keys(testScores).indexOf(i), Number('0.' + j + '0'), '0.' + testScores[i][j][a]]; //for some reason j is a string
                output = net.run(predictValue);

                for (d of Object.keys(output)) {
                    let text = feedbackText.innerHTML + j + ': ' + replies[Object.keys(testScores).indexOf(i)][d] + '<br>';

                    if (output[d] === Math.max(...Object.values(output)) && replies[Object.keys(testScores).indexOf(i)][d] !== '') {
                        feedbackText.innerHTML = text;
                    }
                }
            }
        }
    }
}