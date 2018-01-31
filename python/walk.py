#!/usr/bin/env python3

import os
rootdir='/var/www/html'
dir_len=len('/var/www')
with open('walk.out','w') as f:
    f.write('root dir:%s\n'%rootdir)
    for dirname,dire,filelist in os.walk(rootdir):
        f.write('---------------------------------\n')
        name=dirname[dir_len:]
        f.write(name+'\n')
        if len(dire)!=0:
            f.write('   '+str(dire[:])+'\n')
        for fina in filelist:
            f.write('   |---%s\n'%fina)
