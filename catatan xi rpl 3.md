# pertama kali project  push ke github
1. menandai project menjadi sebuah repostory lokal (project di git)
   git init
2. konfigurasi akun (komputer sekolah)
   git config user.name "nama sendiri"
   git config user.email "email sendiri"

2. konfigurasi akun (komputer sendiri)
   git config --global user.name  "nama sendiri"
   git config --global user.email "email sendiri"

3. cek status perubahan file
   git status

4. tambah perubahan file (simpan ke koper)
   git add .

5. kasih keterangan apa yang sudah di ubah
   git commit -m "pesan"

6. kasih akses ke server (github)
   git remote add origin https://token_github@github.com/username/namarepo.git

7. kirim ke server (github)
   git push origin namabranch

# push kedua kali dan seterusnya
git add .
git commit -m"pesan"
git push origin master

# cara membuat token github
1. pergi ke settings
2. pergi ke developer settings
3. pilih personal access token (classic)
4. generate token (classic)
5. kasih note token (contoh: Token Github)
6. Ceklis bagian repo
7. submit
8. copy token yang muncul
9. simpan di notepad dan save di documents 
