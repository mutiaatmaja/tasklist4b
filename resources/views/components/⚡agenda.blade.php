<?php

use Livewire\Component;

new class extends Component {
    //
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
            <option value="Baru">Baru</option>
            <option value="Pending">Pending</option>
            <option value="Ngambang">Ngambang</option>
            <option value="Bambang">Bambang</option>
            <option value="Done">Done</option>
        </select>
        <label>Mood</label>
        <select wire:model="mood">
            <option value="Happy">Happy</option>
            <option value="Angry">Angry</option>
        </select>
        <button wire:click="simpan">SIMPAAAAAAAAAAN</button>
    </form>

    <hr color="blue" />
    ini untuk tampilan table kegiatan anda
    <hr color="black" />
</div>
