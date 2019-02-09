-- Relasi langsung ke kegiatan_patroli
delete from inventori_patroli where kegiatan_patroli_id = (select max(id) from kegiatan_patroli);
delete from hotspot where kegiatan_patroli_id = (select max(id) from kegiatan_patroli);
delete from aktivitas_harian_patroli where kegiatan_patroli_id = (select max(id) from kegiatan_patroli);
delete from anggota_patroli where kegiatan_patroli_id = (select max(id) from kegiatan_patroli);
delete from dokumentasi where kegiatan_patroli_id = (select max(id) from kegiatan_patroli);

-- Relasi ke patroli_darat
delete from pemadaman where patroli_darat_id = (select max(id) from patroli_darat);
delete from kondisi_tanah where patroli_darat_id = (select max(id) from patroli_darat);
delete from kondisi_vegetasi where patroli_darat_id = (select max(id) from patroli_darat);
delete from kondisi_sumber_air where patroli_darat_id = (select max(id) from patroli_darat);
delete from hasil_uji where patroli_darat_id = (select max(id) from patroli_darat);

delete from patroli_darat where lokasi_patroli_id = (select max(id) from lokasi_patroli);

-- Patroli udara
delete from patroli_udara where lokasi_patroli_id = (select max(id) from lokasi_patroli);

-- Delete lokasi patroli
DELETE FROM lokasi_patroli WHERE kegiatan_patroli_id = (SELECT MAX(id) FROM kegiatan_patroli);

-- Delete kegiatan patroli
delete from kegiatan_patroli where id = (select max(id) from kegiatan_patroli);
