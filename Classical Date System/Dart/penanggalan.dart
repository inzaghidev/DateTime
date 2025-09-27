import 'dart:io';
import 'package:intl/intl.dart';

void main() {
  DateTime datetime = DateTime.now();

  String thn = datetime.year.toString();
  String bln = datetime.month.toString();
  String bul = DateFormat.MMMM().format(datetime);
  String tgl = datetime.day.toString();
  String har = datetime.weekday.toString();
  String hari = DateFormat.EEEE().format(datetime);
  int hariKe = int.parse(DateFormat("D").format(datetime));
  String jam = datetime.hour.toString().padLeft(2, '0');
  String mnt = datetime.minute.toString().padLeft(2, '0');
  String dtk = datetime.second.toString().padLeft(2, '0');

  print("Tahun                   : $thn");
  print("Bulan                   : $bln ($bul)");
  print("Tanggal                 : $tgl");
  print("Hari                    : $har ($hari)");
  print("Hari ke (dalam Setahun) : $hariKe");
  print("Jam                     : $jam");
  print("Menit                   : $mnt");
  print("Detik                   : $dtk\n");

  // Format lengkap
  print(DateFormat("EEEE, d MMMM yyyy").format(datetime));
  print("Day-$hariKe");
  print("$jam:$mnt:$dtk");
}
