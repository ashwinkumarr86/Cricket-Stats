import csv
import lxml.html

url1='http://stats.espncricinfo.com/ci/engine/records/team/series_results.html?id=6;type=trophy'

out = csv.writer(open('bgtrophy.csv','wb',))
out.writerow(('Season', 'Winner', 'Margin'))

seasons = []
winners = []
margins = []

content = lxml.html.parse(url1)

season = content.xpath('//tr[@class="data1"]/td[2]/')
winner = content.xpath('//tr[@class="data1"]/td[4]/')
margin = content.xpath('//tr[@class="data1"]/td[5]')
#umpi = content.xpath('//tr[@class="data1"]/td[3]/b')

sean = [bat.text for bat in season]
winn = [c.tail for c in winner]
marg = [r.text for r in margin]
#ump = [mint.text for mint in umpi]

seasons.extend(sean)
winners.extend(winn)
margins.extend(marg)

zipped = zip(seasons,winners,margins)
for row in zipped:
    out.writerow(row)
    zipped = None
