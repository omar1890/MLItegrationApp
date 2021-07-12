import os
import pandas as pd
import csv


def readfile(fileDir, filename):
    fopen = open(fileDir + filename, 'r')
    rnafile = fopen.readlines()
    del rnafile[0]
    with open("test.txt", 'w') as f:
        for i in rnafile:
            f.write(i)
    data = pd.read_csv("test.txt", sep='\t', header=None)
    
    return data, filename


def transform(data, filename):
    rnaseq = data.loc[:, 1]
    
    rnadata1 = data.loc[:, 0]
    rnadata2 = data.loc[:, 4]
    rnastructure = []
    for i in range(len(rnadata2)):
        if rnadata2[i] == 0:
            rnastructure.append(".")
        else:
            if rnadata1[i] > rnadata2[i]:
                rnastructure.append(")")
            else:
                rnastructure.append("(")
    
    
    return rnaseq, rnastructure, filename


def savefile(rnaseq, rnastructure, filename):
    rnafile = filename[:-3]
    rnafile = rnafile + ".csv"
    rnafile = csv_Dir + rnafile
    rnacsv = open(rnafile, 'w', newline='')
    writer = csv.writer(rnacsv)
    m = len(rnastructure)
    for i in range(m):
        writer.writerow(rnastructure[i])
    os.remove("test.txt")
    rnaseqfile = seq_Dir + filename[:-3] + "_seq.csv"
    rnaseqcsv = open(rnaseqfile, 'w', newline='')
    seqwriter = csv.writer(rnaseqcsv)
    m = len(rnastructure)
    for i in range(m):
        seqwriter.writerow(rnaseq[i])

list_Dir = '/Users/hp/Desktop/project/Rss/source_data/'
csv_Dir = '/Users/hp/Desktop/project/Rss/stru_data/'
seq_Dir = '/Users/hp/Desktop/project/Rss/seq_data/'
# list_Dir = '/home/zhangch/RSS/source_data/'
# csv_Dir = '/home/zhangch/RSS/stru_data/'
# seq_Dir = '/home/zhangch/RSS/seq_data/'

if __name__ == '__main__':
    pathDir = os.listdir(list_Dir)
    for i in pathDir:
        data, filename = readfile(list_Dir, i)
        rnaseq, rnastructure, filename = transform(data, filename)
        savefile(rnaseq, rnastructure, filename)




