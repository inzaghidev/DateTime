import 'dart:io';
import 'package:intl.dart';

void main() {
  int leap;
  int harmun;

  DateTime datetime = DateTime.now();

  int thn = datetime.year; // harus int
  int bln = datetime.month;
  String bul = DateFormat.MMMM().format(datetime);
  int tgl = datetime.day;
  int har = datetime.weekday; // angka hari (1=Senin)
  String hari = DateFormat.EEEE().format(datetime);
  int hariKe = int.parse(DateFormat("D").format(datetime));
  int jam = datetime.hour;
  int mnt = datetime.minute;
  int dtk = datetime.second;

  // cek tahun kabisat
  if (thn % 400 == 0) {
    leap = 366;
  } else if (thn % 100 == 0) {
    leap = 365;
  } else if (thn % 4 == 0) {
    leap = 366;
  } else {
    leap = 365;
  }

  // hitungan hari + jam dalam desimal
  double dateCal =
      (hariKe - 1) + (jam / 24.0) + (mnt / 1440.0) + (dtk / 86400.0);

  double persen = (100.0 * dateCal / leap);
  harmun = leap - hariKe;
  double permun = 100.0 - persen;

  // Output
  print("Tahun                    : $thn");
  print("Bulan                    : $bln ($bul)");
  print("Tanggal                  : $tgl");
  print("Hari                     : $har ($hari)");
  print("Hari ke (dalam Setahun)  : $hariKe");
  print("Sisa Hari (Tahun depan)  : $harmun");
  print("Persentase dalam Setahun : ${persen.toStringAsFixed(6)}%");
  print("Persentase Hitung Mundur : ${permun.toStringAsFixed(6)}%");
  print("Jam                      : $jam");
  print("Menit                    : $mnt");
  print("Detik                    : $dtk\n");

  // Format lengkap
  print(DateFormat("EEEE, d MMMM yyyy").format(datetime));
  print("Day-$hariKe (${persen.toStringAsFixed(4)}%)");
  print(
      "$jam:${mnt.toString().padLeft(2, '0')}:${dtk.toString().padLeft(2, '0')}");
}
