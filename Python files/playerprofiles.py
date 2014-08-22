import csv
import lxml.html


base_url = 'http://stats.espncricinfo.com/ci/engine/stats/index.html?class=1;template=results;type=batting'
url_part1 = 'http://stats.espncricinfo.com/ci/engine/stats/index.html?class=1;'
url_part2 = 'page='
url_part3 = 'template=results;type=batting'
url_list = ['http://stats.espncricinfo.com/ci/engine/stats/index.html?class=1;template=results;type=batting']
for i in range(2,55):
    url_next = url_part1 + url_part2 + str(i) + ';' + url_part3
    url_list.append(url_next)
	
players = [ ]

for page in url_list:
    content = lxml.html.parse(page)
    links = content.xpath('//tr[@class="data1"]/td[1]/a/@href')
    player_links = [player for player in links]
    players.extend(player_links)

#out = csv.writer(open('profile_info.csv','wb',))
#out.writerow(('FullName','Born','Batting style','Bowling style','Profile URL'))

f = open('profile_info.csv', 'wb')
out = csv.writer(f, delimiter=",")
out.writerow(['FullName','Born','Batting style','Bowling style','Profile URL'])

for plyr in players:
	plyrinfo = lxml.html.parse(plyr)
	info = content.xpath('//p[@class="ciPlayerinformationtxt"]/b')
	info1 = [ifr.text for ifr in info]
	val = content.xpath('//p[@class="ciPlayerinformationtxt"]/span')
	val1 = [vr.text for vr in val]
	
	if 'Full name' in info1:
		fni = info1.index('Full name')
		pname = val[fni].text
	else:
		pname = 'NULL'
		
	if 'Born' in info1:
		bi = info1.index('Born')
		pbday = val[bi].text.strip('\n')
	else:
		pbday = 'NULL'
	
	/*
	if 'Full name' in info1:
		fni = info1.index('Full name')
		pname = val[fni].text
	else:
		pname = 'NULL'
	*/
	
	/*
	if 'Full name' in info1:
		fni = info1.index('Full name')
		pname = val[fni].text
	else:
		pname = 'NULL'
	*/
	
	#fni = info1.index('Full name')
	#bi = info1.index('Born')
	bsi = info1.index('Batting style')
	bwi = info1.index('Bowling style')
	
	if 'Right-hand bat' in val1:
		gst = val1.index('Right-hand bat')
	else:
		gst = val1.index('Left-hand bat')
		
	#pname = val[fni].text
	#pbday = val[bi].text.strip('\n')
	pbtsy = val[gst].text
	pbwsy = val[gst+1].text
	fullinfo = [pname,pbday,pbtsy,pbwsy,plyr]
	out.writerow(fullinfo)
	
f.close()

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

