<?php

namespace Database\Seeders;

use App\Models\Peserta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PesertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $peserta = [
            //Table A
            [
                "Tante Suratno",
                "VP Global Strategic Partnership",
                "730563@telkom.co.id",
                1
            ],
            [
                "Andris Masengi",
                "Sales Director",
                "amasengi@cisco.com",
                2
            ],
            [
                "Novan Adian",
                "Director Partner Business Group and SMB Sales Leader",
                "nadian@cisco.com",
                3
            ],
            [
                "Ahmad Hidayat",
                "VP Glob Strtgc Prtnrship Team Project Lead 2",
                "720170@telkom.co.id",
                4
            ],
            [
                "Paulus Wibowo Surjo Laksono",
                "VP Project Sourcing & Partnership",
                "paulus@pins.co.id",
                5
            ],
            //Table b
            [
                "Venusiana FM",
                "Direktur Enterprise & Business Service",
                "664025@telkom.co.id",
                6
            ],
            [
                "Herlan Wijanarko",
                "Direktur Network & IT Solution",
                "651134@telkom.co.id",
                7
            ],
            [
                "Budi Setyawan Wijaya",
                "Direktur Strategic Portfolio",
                "720149@telkom.co.id",
                8
            ],
            [
                "Roberto Surya Negara",
                "President Director",
                "roberto@pins.co.id",
                9,
            ],
            [
                "Marina Kacaribu",
                "Managing Director Cisco Indonesia",
                "mkacarib@cisco.com",
                10,
            ],
            [
                "Anil Kumar",
                "Regional Director Sales Telco Business",
                "kumanil@cisco.com",
                11
            ],
            //Table C
            [
                "Teuku Muda Nanta",
                "EGM Digital Connectivity Service",
                "720572@telkom.co.id",
                12,
            ],
            [
                "Heru Adryana",
                "Finance, Risk & HC Management Director",
                "heru.adryana@pins.co.id",
                13,
            ],
            [
                "Henry Henry",
                "Client Executives Telkom Group",
                "henrhenr@cisco.com",
                14,
            ],
            [
                "xxx",
                "xxx",
                "xxx",
                15,
            ],
            [
                "Konang Prihandoko",
                "EVP CPE Integrator",
                "prihandoko@pins.co.id",
                16,
            ],
            //Table D
            [
                "Irena Aldanituti",
                "Deputy EGM Solution",
                "730042@telkom.co.id",
                17,
            ],
            [
                "Ermono Liman Prabowo",
                "VP Network/IT Stra, Tech & Architecture",
                "740091@telkom.co.id",
                18,
            ],
            [
                "xxx",
                "xxx",
                "xxx",
                19,
            ],
            [
                "Jeremy Tan",
                "BDM, GTM Sales Acceleration, APJC",
                "jeremyta@cisco.com",
                20,
            ],
            [
                "Toufik Gozali",
                "EVP Professional Services",
                "toufik.gozali@pins.co.id",
                21,
            ],
            //Table E
            [
                "Djauhari Nurachman",
                "GM Financial & Regional Banking Service",
                "700651@telkom.co.id",
                22,
            ],
            [
                "Kristian Wahjuono Ari",
                "GM Manufacturing & Infrastructure Service",
                "710373@telkom.co.id",
                23,
            ],
            [
                "Fahmi Muhammad Husin",
                "GM Tourism & Welfare Service",
                "810091@telkom.co.id",
                24,
            ],
            [
                "Diah Purnama Sari",
                "GM Property & Resources Services",
                "720028@telkom.co.id",
                26,
            ],
            [
                "Helmi Misbah",
                "VP Corporate Strategic Planning & Transformation",
                "helmi.misbah@pins.co.id",
                27,
            ],
            //Table F
            [
                "Andri Herawan Sasoko",
                "VP Corporate Communication Telkom",
                "720486@telkom.co.id",
                28,
            ],
            [
                "Sabri Rasyid",
                "AVP External Communication Telkom",
                "680149@telkom.co.id",
                29,
            ],
            [
                "Aries Priyono",
                "SM Government Solution",
                "820062@telkom.co.id",
                30,
            ],
            [
                "Erwin Rasad",
                "SPaaCH PAM & BDM Telkom Group",
                "erasad@cisco.com",
                31,
            ],
            [
                "Ronaldo Naiborhu",
                "VP Legal & Corporate Affair",
                "ronaldo@pins.co.id",
                32,
            ],
            //Table G
            [
                "Rully Jauvan Sagala",
                "SM Government Solution",
                "810107@telkom.co.id",
                100
            ],
            [
                "Prasasta Arisanti",
                "SM General Support",
                "730074@telkom.co.id",
                33,
            ],
            [
                "Hananto Mulyono",
                "SM Vertical Industry Solution",
                "710522@telkom.co.id",
                34,
            ],
            [
                "Nikita Iddi Bayu Aji",
                "GM Government Agency Services",
                "730432@telkom.co.id",
                35,
            ],
            [
                "Ario Menak",
                "Manager Product & Sales Professional Services",
                "a.menak@pins.co.id",
                36,
            ],
            [
                "Denny Kristanto",
                "VP Risk Management & General Support",
                "dennyk@pins.co.id",
                37,
            ],
            //Table H
            [
                "Endang Widyaningrum",
                "GM Logistic & Manufacturing Service",
                "730293@telkom.co.id",
                38,
            ],
            [
                "Mr Jeffri Bachtiar (Kamadjaja)",
                "Manager",
                "Jeffri.bachtiar@kamadjaja.com",
                39,
            ],
            [
                "Wahyudin",
                "Account Management",
                "916848@telkom.co.id",
                40,
            ],
            [
                "Fajar Adi Nugroho",
                "GM Private Banking Service",
                "730509@telkom.co.id",
                41,
            ],
            [
                "Iman Pramudito Hanggoro Edhi",
                "GM SOE Banking Service",
                "70059@telkom.co.id",
                42,
            ],
            [
                "Apriantoni",
                "Manager Sales Plan & Account Managemen",
                "apriantoni@pins.co.id",
                42,
            ],
            // TABLE I
            [
                "Elysabeth Damayanti",
                "OVP Cyber Security",
                "740183@telkom.co.id",
                43,
            ],
            [
                "Riyusno Lebang",
                "Manager Government Offering 1",
                "830120@telkom.co.id",
                44,
            ],
            [
                "Setyo Nugroho",
                "OSM Digi Conn Incubation & Channel MGT",
                "730368@telkom.co.id",
                45,
            ],
            [
                "Subroto Marzuki",
                "GM Financial & Welfare Service",
                "740130@telkom.co.id",
                46,
            ],
            [
                "Kiky Setiawan",
                "Account Manager",
                "sdicky@cisco.com",
                47,
            ],
            [
                "Fithriansyah Nasution",
                "VP Human Capital Management",
                "fithriansyah@pins.co.id",
                48,
            ],
            // TABLE J
            [
                "Bobby Iskandar",
                "MGR Sales FWS Private Service",
                "870065@telkom.co.id",
                49,
            ],
            [
                "Muhammad Iqbal",
                "SPaaCH Systems Engineer",
                "muhammiq@cisco.com",
                50,
            ],
            [
                "Christian wahyu adhi putra",
                "Mgr B2B Specialist",
                "830079@telkom.co.id",
                51,
            ],
            [
                "Superindo",
                "xxx",
                "xxx",
                52,
            ],
            [
                "Rahmat",
                "Account Management",
                "xxx",
                53,
            ],
            [
                "Ahmad Junaedi",
                "GM Retail & Media Service",
                "720389@telkom.co.id",
                54,
            ],
            // TABLE K
            [
                "Mr. Andri Sofyan (MCF)",
                "IT Manager",
                "andri.sofiyan@mcf.co.id",
                55,
            ],
            [
                "Mr. Daniel Fernando (Indomobil)",
                "IT Manager",
                "daniel.fernando@indomobil.co.id",
                56,
            ],
            [
                "Aris Dwi Basuki",
                "GM Private Conglomeration Service",
                "720297@telkom.co.id",
                57,
            ],
            [
                "Bagus Tri Pengawa",
                "Account Management",
                "xxx",
                58,
            ],
            [
                "Mr. Yohanes (MCF)",
                "Staf MCF",
                "Yohanes@mcf.co.id",
                59,
            ],
            [
                "M.I. Atika Prihastuti",
                "Account Manager",
                "920136@telkom.co.id",
                60,
            ],
            // TABLE L
            [
                "Mr. Indra Darmawan (WOM)",
                "Head Infra WOM Finance",
                "Idarmawan@wom.co.id",
                61,
            ],
            [
                "Mr. Satria Galang Saputra (WOM)",
                "IT Manager",
                "Satriagalangsaputra.19@gmail.com",
                62,
            ],
            [
                "Evi Rina Mahendram",
                "GM Energy & Resources Service",
                "720103@telkom.co.id",
                63,
            ],
            [
                "Sukamto",
                "Account Management",
                "710051@telkom.co.id",
                64,
            ],
            [
                "Sandy Andreas",
                "Account Management",
                "sandy.andreas@pins.co.id",
                65,
            ],
            [
                "Anton Danismaya",
                "Marketing &Sales",
                "anton.danismaya@pins.co.id",
                66,
            ],
            // TABLE M
            [
                "Adhi Firmansyah",
                "MGR Government Sales 1",
                "820024@telkom.co.id",
                67,
            ],
            [
                "Dani Setiawan Basuki",
                "MGR Government Sales 2",
                "730377@telkom.co.id",
                68,
            ],
            [
                "Desi Kartikasari",
                "MGR Government Offering 2",
                "810118@telkom.co.id",
                69,
            ],
            [
                "Dhata Praditya",
                "Officer 1 Glob Strtgc Partnership Alignment",
                "830114@telkom.co.id",
                70,
            ],
            [
                "Melissa",
                "ASEAN SP Marketing",
                "memeliss@cisco.com",
                71,
            ],
            [
                "Muthia Sari Niode",
                "SO Strategic Partnership",
                "muthia.niode@pins.co.id",
                72,
            ],
            // TABLE N
            [73],
            [74],
            [75],
            [76],
            [77],
            [78],
            [79],
            // TABLE O
            [
                "Berlian Siregar",
                "Officer 4 B2B Specialist",
                "920396@telkom.co.id",
                80,
            ],
            [
                "Deflion Yussac Sahlan",
                "Staf Ahli/ Setara",
                "deflion.sahlan@gmail.com",
                81,
            ],
            [
                "Andre Windra Kurnia",
                "Staf Ahli/ Setara",
                "andrewindra83@gmail.com",
                82,
            ],
            [
                "Team Mr Hananto Mulyono",
                "Manager",
                "xxx",
                83,
            ],
            [
                "Team Mr Hananto Mulyono",
                "Manager",
                "xxx",
                84,
            ],
            [
                "Puthut Punggawasesa",
                "Account Management",
                "puthut.pungga@pins.co.id",
                85,
            ],
            // TABLE P
            [
                "Kevin Kurniawan",
                "SMB Sales account manager",
                "kkurniaw@cisco.com",
                86,
            ],
            [
                "Mr. Arya (UNJ)",
                "Staf",
                "arya@unj.ac.id",
                87,
            ],
            [
                "Mr. Heri Saputra (Technipenergies)",
                "Staff",
                "heri.saputra@technipenergies.com",
                88,
            ],
            [
                "Bagus Wahyudin",
                "Account Management",
                "916848@telkom.co.id",
                89,
            ],
            [
                "xxx",
                "xxx",
                "xxx",
                90,
            ],
            [
                "Deni Hermawan",
                "Account Management",
                "deni.hermawan@pins.co.id",
                91,
            ],
            // TABLE Q
            [
                "Salsabila",
                "Account Management",
                "nura.salsabila@pins.co.id",
                92,
            ],
            [
                "AM PCS",
                "xxx",
                "xxx",
                93,
            ],
            [
                "AM PCS",
                "xxx",
                "xxx",
                94,
            ],
            [
                "Jessica louis",
                "Program manager",
                "jatmadja@cisco.com",
                95,
            ],
            [
                "Rina Sulistiawati",
                "Manager Channel Management",
                "rina.sulistiawati@pins.co.id",
                96,
            ],
            [97],
            //Table R
            [
                "Feri Kurniawan",
                "Manager Product Development & Solution CPE",
                "feri.kurniawan@pins.co.id",
                98,
            ],
            [99],
            [100],
            [101],
            [102],
            [103],
            //Table S
            [
                "Salira Sitepu",
                "Manager Service Operation Seat Management",
                "salira@pins.co.id",
                104,
            ],
            [105],
            [106],
            [107],
            [108],
            [109],
            //Table T
            [110],
            [111],
            [112],
            [113],
            [114],
            [115],
            //Table U
            [
                "Revina Febriyant",
                "Off 1 Bod Data & Report Management",
                "revina.febriyanti@pins.co.id",
                116,
            ],
            [117],
            [118],
            [119],
            [120],
            [121],
            //Table V
            [
                "Andika Wulandari Hadisuwityo",
                "Off 1 Regulatory Compliance",
                "icha@pins.co.id",
                122
            ],
            [123],
            [124],
            [125],
            [126],
            [127],
            //Table W
            [
                "Astri Meylita",
                "Off 2 Bod Data & Report Management",
                "astri.meylita@pins.co.id",
                128,
            ],
            [129],
            [130],
            [131],
            [132],
            [133],
        ];

        foreach ($peserta as $pes) {
            if (count($pes) > 3 && $pes[2] !== "xxx") {
            }
            Peserta::create([
                'name' => $pes[0],
                'jabatan' => $pes[1],
                'email' => $pes[2],
                'meja_id' => $pes[3],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
    }
}
