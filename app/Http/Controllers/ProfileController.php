<?php

namespace App\Http\Controllers;

use App\Models\KomiteTsp;
use App\Models\ProfileJepara;
use App\Models\ProfileKomite;
use App\Models\ProfileRegulasi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    protected $profileJepara, $profileKomite, $profileRegulasi, $komiteTsp;

    public function __construct(ProfileJepara $profileJepara, ProfileKomite $profileKomite, ProfileRegulasi $profileRegulasi, KomiteTsp $komiteTsp)
    {
        $this->profileJepara = $profileJepara;
        $this->profileKomite = $profileKomite;
        $this->profileRegulasi = $profileRegulasi;
        $this->komiteTsp = $komiteTsp;
    }

    public function jepara()
    {
        $profileJepara = $this->profileJepara->getData();
        return view('profiles.jepara', compact(['profileJepara']));
    }

    public function komite()
    {
        $profileKomite = $this->profileKomite->getData();
        $komiteTsp = $this->komiteTsp->getAll();
        return view('profiles.komite', compact(['profileKomite', 'komiteTsp']));
    }

    public function regulasi()
    {
        $profileRegulasi = $this->profileRegulasi->getData();
        return view('profiles.regulasi', compact(['profileRegulasi']));
    }
}
