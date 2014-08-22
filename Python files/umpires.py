import csv
import lxml.html

url1='http://stats.espncricinfo.com/ci/engine/stats/index.html?class=1;template=results;type=official'
#url2 ='page='
#url3 ='template=results;type=batting;view=innings'
#url5 = ['http://stats.espncricinfo.com/ci/engine/stats/index.html?class=1;orderby=start;template=results;type=batting;view=innings']


out = csv.writer(open('test_umpires.csv','wb',))
out.writerow(('Official', 'Country', 'Span', 'Umpire','TV Umpire','Referee','Total'))

official = []
country = []
timespan = []
umpire = []
tvumpire = []
referee = []
total =[]

content = lxml.html.parse(url1)

offic = content.xpath('//tr[@class="data1"]/td[1]/')
ct = content.xpath('//tr[@class="data1"]/td[1]/*')
tspan = content.xpath('//tr[@class="data1"]/td[2]')
umpi = content.xpath('//tr[@class="data1"]/td[3]/b')
tvumpi = content.xpath('//tr[@class="data1"]/td[4]')
refer = content.xpath('//tr[@class="data1"]/td[5]')
totaloff = content.xpath('//tr[@class="data1"]/td[6]')
    
office = [bat.text for bat in offic]
cou = [c.tail for c in ct]
tsp = [r.text for r in tspan]
ump = [mint.text for mint in umpi]
tvump = [bfaced.text for bfaced in tvumpi]
ref = [fs.text for fs in refer]
tot = [s.text for s in totaloff]
    
official.extend(office)
country.extend(cou)
timespan.extend(tsp)
umpire.extend(ump)
tvumpire.extend(tvump)
referee.extend(ref)
total.extend(tot)

zipped = zip(official,country,timespan,umpire,tvumpire,referee,total)
for row in zipped:
    out.writerow(row)
    zipped = None