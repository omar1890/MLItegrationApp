from __future__ import division
import numpy as np
import math
import scipy.misc
import os
import imageio
from imageio import imsave
from matplotlib.pyplot import imread
import pandas as pd
import csv
import random
import shutil

if __name__ == "__main__":
    # pathDir = '/home/zhangch/RSS/5s/train_labelpng/'
    # pathDir2 = '/home/zhangch/Desktop/tmRNA/train_labelpng2/'
    #pathDir= '/Users/hp/Desktop/project/5s/train_labelpng/'
    pathDir= '/Users/hp/Desktop/project/Rss/train_set/'
    #pathDir = '/Users/hp/Desktop/project/5s/train_labelpng/'
    pathDir2 = '/Users/hp/Desktop/project/tmRNA/train_labelpng2/'
    filelist = os.listdir(pathDir)
    filepointlist = []
    label_0_num = 0
    label_2_num = 0
    label_1_num = 0
    for i in filelist:
        if i.split('.')[0] == '0':
            label_0_num = label_0_num + 1
        elif i.split('.')[0] == '1':
            label_1_num = label_1_num + 1
        else:
            label_2_num = label_2_num + 1
            filepointlist.append(i)
            #print(filepointlist)

    y = list(range(len(filepointlist)))
    print(y)
    slice = random.sample(y, label_2_num - label_0_num)
    print(slice)
    for i in range(label_2_num - label_0_num):
        shutil.copyfile(pathDir + filepointlist[slice[i]], pathDir2 + filepointlist[slice[i]])
        os.remove(pathDir + filepointlist[slice[i]])



