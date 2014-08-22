import csv
import lxml.html

url1='http://stats.espncricinfo.com/ci/content/records/283704.html'
#url2 ='283705'
#url3 ='type=year'
#url5 = ['http://stats.espncricinfo.com/ci/engine/records/team/match_results.html?class=1;id=1990;type=year']

out = csv.writer(open('testmatch_mom.csv','wb',))
out.writerow(('Player','Country','Span','Matches','Awards'))

Player = []
Country = []
Span = []
Matches = []
Awards = []
	
content = lxml.html.parse(url1)
	
player = content.xpath('//tr[@class="data1"]/td[1]/a')
country = content.xpath('//tr[@class="data1"]/td[1]/*')
span = content.xpath('//tr[@class="data1"]/td[2]')
matches = content.xpath('//tr[@class="data1"]/td[3]')
awards = content.xpath('//tr[@class="data1"]/td[4]')

playr = [t1.text for t1 in player]
ct = [t2.tail for t2 in country]
tmf = [wt.text for wt in span]
mat = [wm.text for wm in matches]
award = [vn.text for vn in awards]  
	
Player.extend(playr)
Country.extend(ct)
Span.extend(tmf)
Matches.extend(mat)
Awards.extend(award)
    
zipped = zip(Player,Country,Span,Matches,Awards)
for row in zipped:
    out.writerow(row)
    zipped = None