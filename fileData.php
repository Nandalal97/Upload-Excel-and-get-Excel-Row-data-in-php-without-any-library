<?php
if ($_FILES['fileUpload']['error'] === UPLOAD_ERR_OK) {
    $uploadDir = 'uploads/';
    $uploadedFile = $uploadDir . basename($_FILES['fileUpload']['name']);

    if (move_uploaded_file($_FILES['fileUpload']['tmp_name'], $uploadedFile)) {
        // Open the uploaded CSV file
        $fileHandle = fopen($uploadedFile, 'r');

        // Data fetch from 30th number row
        $rowNumber = 0;
        while ($rowNumber < 30 && !feof($fileHandle)) {
            fgets($fileHandle);
            $rowNumber++;
        }
        $csvData = [];
        while (($data = fgetcsv($fileHandle)) !== false) {
            $csvData[] = $data;
        }
        fclose($fileHandle);
        //  echo '<pre>';
        // print_r($csvData);
        $excelData['csvData'] =[$csvData];
        $excelData['mappingData'] = [
            [
            'formFildId'=> 1,
            'csvId'=> 6
            ],
            [
            'formFildId'=> 2,
            'csvId'=> 115
            ],
            [
            'formFildId'=> 3,
            'csvId'=> 28
            ],
            [
            'formFildId'=> 4,
            'csvId'=> 116
            ],
            [
            'formFildId'=> 5,
            'csvId'=> 44
            ],
            [
            'formFildId'=> 6,
            'csvId'=> 117
            ],
            [
            'formFildId'=> 7,
            'csvId'=> 79
            ],
            [
            'formFildId'=> 8,
            'csvId'=> 118
            ],
            [
            'formFildId'=> 9,
            'csvId'=> 80
            ],

            // Seafoods
            [
            'formFildId'=> 101,
            'csvId'=> 1
            ],
            [
            'formFildId'=> 102,
            'csvId'=> 73
            ],
            [
            'formFildId'=> 103,
            'csvId'=> 2
            ],
            [
            'formFildId'=> 104,
            'csvId'=> 78
            ],
            [
            'formFildId'=> 105,
            'csvId'=> 3
            ],
            [
            'formFildId'=> 106,
            'csvId'=> 92
            ],
            [
            'formFildId'=> 107,
            'csvId'=> 8
            ],
            [
            'formFildId'=> 108,
            'csvId'=> 93
            ],
            [
            'formFildId'=> 109,
            'csvId'=> 18
            ],
            [
            'formFildId'=> 110,
            'csvId'=> 95
            ],
            [
            'formFildId'=> 111,
            'csvId'=> 20
            ],
            [
            'formFildId'=> 112,
            'csvId'=> 107
            ],
            [
            'formFildId'=> 113,
            'csvId'=>42 
            ],
            [
            'formFildId'=> 114,
            'csvId'=> 110
            ],
            [
            'formFildId'=> 115,
            'csvId'=> 47
            ],
            [
            'formFildId'=> 116,
            'csvId'=> 121
            ],
            [
            'formFildId'=> 117,
            'csvId'=>163
            ],
            [
            'formFildId'=> 118,
            'csvId'=> 124
            ],
            [
            'formFildId'=> 119,
            'csvId'=> 60
            ],
            [
            'formFildId'=> 120,
            'csvId'=> 130
            ],
            [
            'formFildId'=> 121,
            'csvId'=> 63
            ],
            [
            'formFildId'=> 122,
            'csvId'=>136
            ],
            [
            'formFildId'=> 123,
            'csvId'=> 63
            ],
            [
            'formFildId'=> 124,
            'csvId'=> 145
            ],
            [
            'formFildId'=> 125,
            'csvId'=> 146
            ],
            [
            'formFildId'=> 126,
            'csvId'=> 179
            ],
            [
            'formFildId'=> 127,
            'csvId'=> 150
            ],
            [
            'formFildId'=> 128,
            'csvId'=> 183
            ],
            [
            'formFildId'=> 129,
            'csvId'=> 163
            ],
            [
            'formFildId'=> 130,
            'csvId'=> 187
            ],
            [
            'formFildId'=> 131,
            'csvId'=> 172
            ],
            [
            'formFildId'=> 132,
            'csvId'=> 197
            ],
            [
            'formFildId'=> 133,
            'csvId'=> 173
            ],
            [
            'formFildId'=> 134,
            'csvId'=> 198
            ],
            [
            'formFildId'=> 135,
            'csvId'=> 174
            ],
            [
            'formFildId'=> 136,
            'csvId'=>199 
            ],
            [
            'formFildId'=> 137,
            'csvId'=> 175
            ],
            [
            'formFildId'=> 138,
            'csvId'=> 211
            ],
            [
            'formFildId'=> 139,
            'csvId'=> 176
            ],
            //fruits
            [
            'formFildId'=> 201,
            'csvId'=> 10
            ],
            [
            'formFildId'=> 202,
            'csvId'=> 91
            ],
            [
            'formFildId'=> 203,
            'csvId'=> 11
            ],
            [
            'formFildId'=> 204,
            'csvId'=> 99 
            ],
            [
            'formFildId'=> 205,
            'csvId'=> 15
            ],
            [
            'formFildId'=> 206,
            'csvId'=> 102 
            ],
            [
            'formFildId'=> 207,
            'csvId'=> 16
            ],
            [
            'formFildId'=> 208,
            'csvId'=> 105
            ],
            [
            'formFildId'=> 209,
            'csvId'=> 29
            ],
            [
            'formFildId'=> 210,
            'csvId'=> 108
            ],
            [
            'formFildId'=> 211,
            'csvId'=> 30
            ],
            [
            'formFildId'=> 212,
            'csvId'=> 112
            ],
            [
            'formFildId'=> 213,
            'csvId'=> 31
            ],
            [
            'formFildId'=> 214,
            'csvId'=> 122
            ],
            [
            'formFildId'=> 215,
            'csvId'=> 51
            ],
            [
            'formFildId'=> 216,
            'csvId'=> 126
            ],
            [
            'formFildId'=> 217,
            'csvId'=> 70
            ],
            [
            'formFildId'=> 218,
            'csvId'=> 131
            ],
            [
            'formFildId'=> 219,
            'csvId'=> 74
            ],
            [
            'formFildId'=> 220,
            'csvId'=> 133
            ],
            [
            'formFildId'=> 221,
            'csvId'=> 82
            ],
            [
            'formFildId'=> 222,
            'csvId'=> 137
            ],
            [
            'formFildId'=> 223,
            'csvId'=> 90
            ],
            [
            'formFildId'=> 224,
            'csvId'=> 141
            ],
            [
            'formFildId'=> 225,
            'csvId'=> 143
            ],
            [
            'formFildId'=> 226,
            'csvId'=> 164
            ],
            [
            'formFildId'=> 227,
            'csvId'=> 148
            ],
            [
            'formFildId'=> 228,
            'csvId'=> 165
            ],
            [
            'formFildId'=> 229,
            'csvId'=> 151
            ],
            [
            'formFildId'=> 230,
            'csvId'=> 184
            ],
            [
            'formFildId'=> 231,
            'csvId'=> 153
            ],
            [
            'formFildId'=> 232,
            'csvId'=> 188
            ],
            [
            'formFildId'=> 233,
            'csvId'=> 160
            ],
            [
            'formFildId'=> 234,
            'csvId'=> 207 
            ],
            [
            'formFildId'=> 235,
            'csvId'=> 162
            ], 
            //cereals
            [
            'formFildId'=> 301,
            'csvId'=> 7
            ],
            [
            'formFildId'=> 302,
            'csvId'=> 129
            ],
            [
            'formFildId'=> 303,
            'csvId'=> 17
            ],
            [
            'formFildId'=> 304,
            'csvId'=> 152
            ],
            [
            'formFildId'=> 305,
            'csvId'=> 35
            ],
            [
            'formFildId'=> 306,
            'csvId'=> 66
            ],
            [
            'formFildId'=> 307,
            'csvId'=> 67
            ],
            [
            'formFildId'=> 308,
            'csvId'=> 169
            ],
            [
            'formFildId'=> 309,
            'csvId'=> 68
            ],
            [
            'formFildId'=> 310,
            'csvId'=> 181
            ],
            [
            'formFildId'=> 311,
            'csvId'=> 77
            ],
            [
            'formFildId'=> 312,
            'csvId'=> 189
            ],
            [
            'formFildId'=> 313,
            'csvId'=> 88
            ],
            [
            'formFildId'=> 314,
            'csvId'=> 208
            ],
            [
            'formFildId'=> 315,
            'csvId'=> 111
            ],
            [
            'formFildId'=> 316,
            'csvId'=> 209
            ],
            [
            'formFildId'=> 317,
            'csvId'=> 119
            ],
            //HERBS & SPICES
            [
            'formFildId'=> 401,
            'csvId'=> 9
            ],
            [
            'formFildId'=> 402,
            'csvId'=> 85
            ],
            [
            'formFildId'=> 403,
            'csvId'=> 19
            ],
            [
            'formFildId'=> 404,
            'csvId'=> 86
            ],
            [
            'formFildId'=> 405,
            'csvId'=> 21
            ],
            [
            'formFildId'=> 406,
            'csvId'=> 87
            ],
            [
            'formFildId'=> 407,
            'csvId'=> 38
            ],
            [
            'formFildId'=> 408,
            'csvId'=> 97
            ],
            [
            'formFildId'=> 409,
            'csvId'=> 48
            ],
            [
            'formFildId'=> 410,
            'csvId'=> 106
            ],
            [
            'formFildId'=> 411,
            'csvId'=> 56
            ],
            [
            'formFildId'=> 412,
            'csvId'=> 113
            ],
            [
            'formFildId'=> 413,
            'csvId'=> 57
            ],
            [
            'formFildId'=> 414,
            'csvId'=> 120
            ],
            [
            'formFildId'=> 415,
            'csvId'=> 59
            ],
            [
            'formFildId'=> 416,
            'csvId'=> 125
            ],
            [
            'formFildId'=> 417,
            'csvId'=> 66
            ],
            [
            'formFildId'=> 418,
            'csvId'=> 127
            ],
            [
            'formFildId'=> 419,
            'csvId'=> 72
            ],
            [
            'formFildId'=> 420,
            'csvId'=> 128
            ],
            [
            'formFildId'=> 421,
            'csvId'=> 75
            ],
            [
            'formFildId'=> 422,
            'csvId'=> 138
            ],
            [
            'formFildId'=> 423,
            'csvId'=> 84
            ],
            [
            'formFildId'=> 424,
            'csvId'=> 144
            ],
            [
            'formFildId'=> 425,
            'csvId'=> 168
            ],
            [
            'formFildId'=> 426,
            'csvId'=> 190
            ],
            [
            'formFildId'=> 427,
            'csvId'=> 170
            ],
            [
            'formFildId'=> 428,
            'csvId'=> 193
            ],
            [
            'formFildId'=> 429,
            'csvId'=> 171
            ],
            [
            'formFildId'=> 430,
            'csvId'=> 202
            ],
            //meat
            [
            'formFildId'=> 501,
            'csvId'=> 26
            ],
            [
            'formFildId'=> 502,
            'csvId'=> 139
            ],
            [
            'formFildId'=> 503,
            'csvId'=> 53
            ],
            [
            'formFildId'=> 504,
            'csvId'=> 154
            ],
            [
            'formFildId'=> 505,
            'csvId'=> 76
            ],
            [
            'formFildId'=> 506,
            'csvId'=> 156
            ],
            [
            'formFildId'=> 507,
            'csvId'=> 89
            ],
            [
            'formFildId'=> 508,
            'csvId'=> 158
            ],
            [
            'formFildId'=> 509,
            'csvId'=> 98
            ],
            [
            'formFildId'=> 510,
            'csvId'=> 200
            ],
            [
            'formFildId'=> 511,
            'csvId'=> 100
            ],
            [
            'formFildId'=> 512,
            'csvId'=> 203
            ],
            [
            'formFildId'=> 513,
            'csvId'=> 134
            ],
            [
            'formFildId'=> 514,
            'csvId'=> 204
            ],
            [
            'formFildId'=> 515,
            'csvId'=> 135
            ],
            [
            'formFildId'=> 516,
            'csvId'=> 210
            ],
            //vegetables
            [
            'formFildId'=> 601,
            'csvId'=> 12
            ],
            [
            'formFildId'=> 602,
            'csvId'=> 40
            ],
            [
            'formFildId'=> 603,
            'csvId'=> 13
            ],
            [
            'formFildId'=> 604,
            'csvId'=>43
            ],
            [
            'formFildId'=> 605,
            'csvId'=> 14
            ],
            [
            'formFildId'=> 606,
            'csvId'=> 46
            ],
            [
            'formFildId'=> 607,
            'csvId'=> 22
            ],
            [
            'formFildId'=> 608,
            'csvId'=> 49
            ],
            [
            'formFildId'=> 609,
            'csvId'=> 23
            ],
            [
            'formFildId'=> 610,
            'csvId'=> 50
            ],
            [
            'formFildId'=> 611,
            'csvId'=> 24
            ],
            [
            'formFildId'=> 612,
            'csvId'=> 54
            ],
            [
            'formFildId'=> 613,
            'csvId'=>25 
            ],
            [
            'formFildId'=> 614,
            'csvId'=> 55
            ],
            [
            'formFildId'=> 615,
            'csvId'=> 27
            ],
            [
            'formFildId'=> 616,
            'csvId'=> 71
            ],
            [
            'formFildId'=> 617,
            'csvId'=> 33
            ],
            [
            'formFildId'=> 618,
            'csvId'=> 81
            ],
            [
            'formFildId'=> 619,
            'csvId'=> 34
            ],
            [
            'formFildId'=> 620,
            'csvId'=> 101
            ],
            [
            'formFildId'=> 621,
            'csvId'=> 37
            ],
            [
            'formFildId'=> 622,
            'csvId'=> 103
            ],
            [
            'formFildId'=> 623,
            'csvId'=> 36
            ],
            [
            'formFildId'=> 624,
            'csvId'=> 104
            ],
            [
            'formFildId'=> 625,
            'csvId'=> 114
            ],
            [
            'formFildId'=> 626,
            'csvId'=> 180
            ],
            [
            'formFildId'=> 627,
            'csvId'=> 132
            ],
            [
            'formFildId'=> 628,
            'csvId'=> 182
            ],
            [
            'formFildId'=> 629,
            'csvId'=> 140   
            ],
            [
            'formFildId'=> 630,
            'csvId'=> 186
            ],
            [
            'formFildId'=> 631,
            'csvId'=> 155
            ],
            [
            'formFildId'=> 632,
            'csvId'=> 195
            ],
            [
            'formFildId'=> 633,
            'csvId'=> 157 
            ],
            [
            'formFildId'=> 634,
            'csvId'=> 201
            ],
            [
            'formFildId'=> 635,
            'csvId'=> 159
            ],
            [
            'formFildId'=> 636,
            'csvId'=> 206
            ],
            [
            'formFildId'=> 637,
            'csvId'=> 167
            ],
            [
            'formFildId'=> 638,
            'csvId'=> 214
            ],
            [
            'formFildId'=> 639,
            'csvId'=> 178
            ],
            //others
            [
            'formFildId'=> 701,
            'csvId'=> 0
            ],
            [
            'formFildId'=> 702,
            'csvId'=> 96 
            ],
            [
            'formFildId'=> 703,
            'csvId'=> 5
            ],
            [
            'formFildId'=> 704,
            'csvId'=> 123
            ],
            [
            'formFildId'=> 705,
            'csvId'=> 39
            ],
            [
            'formFildId'=> 706,
            'csvId'=> 191
            ],
            [
            'formFildId'=> 707,
            'csvId'=> 41
            ],
            [
            'formFildId'=> 708,
            'csvId'=> 192
            ],
            [
            'formFildId'=> 709,
            'csvId'=> 52
            ],
            [
            'formFildId'=> 710,
            'csvId'=> 196
            ],
            [
            'formFildId'=> 711,
            'csvId'=> 61
            ],
            [
            'formFildId'=> 712,
            'csvId'=> 212
            ],
            [
            'formFildId'=> 713,
            'csvId'=> 64
            ],
            [
            'formFildId'=> 714,
            'csvId'=> 213
            ],
            [
            'formFildId'=> 715,
            'csvId'=> 65
            ],
            //nuts
            [
            'formFildId'=> 801,
            'csvId'=> 4
            ],
            [
            'formFildId'=> 802,
            'csvId'=> 147
            ],
            [
            'formFildId'=> 803,
            'csvId'=> 32
            ],
            [
            'formFildId'=> 804,
            'csvId'=> 149
            ],
            [
            'formFildId'=> 805,
            'csvId'=> 45
            ],
            [
            'formFildId'=> 806,
            'csvId'=> 161
            ],
            [
            'formFildId'=> 807,
            'csvId'=> 62
            ],
            [
            'formFildId'=> 808,
            'csvId'=> 177
            ],
            [
            'formFildId'=> 809,
            'csvId'=> 83
            ],
            [
            'formFildId'=> 810,
            'csvId'=> 185
            ],
            [
            'formFildId'=> 811,
            'csvId'=> 94
            ],
            [
            'formFildId'=> 812,
            'csvId'=> 194
            ],
            [
            'formFildId'=> 813,
            'csvId'=> 109
            ],
            [
            'formFildId'=> 814,
            'csvId'=> 205
            ],
            [
            'formFildId'=> 815,
            'csvId'=> 142
            ]
        ];
        echo json_encode($excelData);
        //Delete Excel File from Upload Folder
        unlink($uploadedFile);
    } else {
        echo "Sorry,Error uploading file.";
    }
} else {
    echo "Error: " . $_FILES['fileUpload']['error'];
}
?>


