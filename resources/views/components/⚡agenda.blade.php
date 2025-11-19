<?php

use Livewire\Component;
use App\Models\Kegiatan;

new class extends Component {
    //
    public $nama_kegiatan;
    public $status;
    public $mood;
    public $semuakegiatan;
    public function simpan()
    {
        $simpan = new Kegiatan();
        $simpan->nama_kegiatan = $this->nama_kegiatan;
        $simpan->status = $this->status;
        $simpan->mood = $this->mood;
        $simpan->save();
    }
    public function mount()
    {
        $this->semuakegiatan = Kegiatan::all();
    }
};
?>

<div>
    <h3>
        Hallo !!!, Silahkan Catat Kegiatan Anda

    </h3>
    <hr color="red" />
    <form>
        <label>Nama Kegiatan</label>
        <input type="text" wire:model="nama_kegiatan">
        <label>Status</label>
        <select wire:model="status">
            <option value="">Silahkan Pilih</option>
            <option value="Baru">Baru</option>
            <option value="Pending">Pending</option>
            <option value="Ngambang">Ngambang</option>
            <option value="Bambang">Bambang</option>
            <option value="Done">Done</option>
        </select>
        <label>Mood</label>
        <select wire:model="mood">
            <option value="">Silahkan Pilih</option>
            <option value="Happy">Happy</option>
            <option value="Angry">Angry</option>
        </select>

        <button wire:click="simpan">SIMPAAAAAAAAAAN</button>
    </form>

    <hr color="blue" />
    ini untuk tampilan table kegiatan anda

    <hr color="black" />
</div>
