import os
from PIL import Image
import scipy.misc
import imageio

# source_path = '/home/zhangch/RSS/tRNA/train_labelpng2/'
# aim_path = '/home/zhangch/RSS/train_set/'
source_path = '/Users/hp/Desktop/project/5s/train_labelpng/'
#source_path ='/Users/hp/Desktop/project/trna/train_labelpng2/'
aim_path = '/Users/hp/Desktop/project/Rss/train_set/'

# str_dir = '/Users/hp/Desktop/project/5s/train_stru_data/'
# png_dir = '/Users/hp/Desktop/project/5s/train_seq_data/'
if __name__ == "__main__":
    pathDir = os.listdir(source_path)
    for i in pathDir:
        image = Image.open(source_path+i)
        image = image.resize((128,19))
        scipy.misc.imsave(aim_path+i, image)
        

