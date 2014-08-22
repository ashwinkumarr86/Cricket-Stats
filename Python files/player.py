import csv
import lxml.html


out = csv.writer(open('profile_info.csv','wb',))
url = 'http://stats.espncricinfo.com/ci/content/player/29290.html'
content = lxml.html.parse(url)
info = content.xpath('//p[@class="ciPlayerinformationtxt"]/b')
info1 = [ifr.text for ifr in info]
#print info1


fni = info1.index('Full name')
bi = info1.index('Born')
#pri = info1.index('Playing role')
bsi = info1.index('Batting style')
bwi = info1.index('Bowling style')


#print fni,bi,pri,bsi,bwi


val = content.xpath('//p[@class="ciPlayerinformationtxt"]/span')
val1 = [vr.text for vr in val]

#bsr = val1.index('Right-hand bat')
#lsr = val1.index('Left-hand bat')

if 'Right-hand bat' in val1:
    gind = val1.index('Right-hand bat')
else:
    gind = val1.index('Left-hand bat')




#print gind


print val[fni].text
print val[bi].text.strip('\n')
print val[gind].text
print val[gind+1].text
#print val[bwi].text

#val1 = [vl.text for vl in val]



#print val[0].text
#print val[1].text.strip('\n')



#print val1
#print rowval
#out.writerow(rowval)
