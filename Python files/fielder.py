import csv
import lxml.html

url1='http://stats.espncricinfo.com/ci/engine/stats/index.html?class=1;orderby=start;'
url2 ='page='
url3 ='template=results;type=fielding'
url5 = ['http://stats.espncricinfo.com/ci/engine/stats/index.html?class=1;template=results;type=fielding;view=innings']
for i in range(2,57):
    url4 = url1 + url2 + str(i) + ';' + url3
    url5.append(url4)

out = csv.writer(open('test_fielders.csv','wb',))
out.writerow(('Player', 'Country', 'Span', 'Matches','Innings','Dismissals','Catches','Stumpings','CatchesAsWktKeeper','CatchesAsFielder','MaxDismissalsInnings','DismissalsPerInnings'))
for page in url5:
    fielders = []
    country = []
    span = []
    matches = []
    innings = []
    dismissals = []
    catches = []
    stumpings = []
    catcheswktkpr = []
    catchesfielder = []
    maxdismissalsinns = []
    dismissalsperinns = []
	
    content = lxml.html.parse(page)
	
    fields = content.xpath('//tr[@class="data1"]/td[1]/a')
    ct = content.xpath('//tr[@class="data1"]/td[1]/*')
    timeframe = content.xpath('//tr[@class="data1"]/td[2]')
    match = content.xpath('//tr[@class="data1"]/td[3]')
    innig = content.xpath('//tr[@class="data1"]/td[4]')
    dismls = content.xpath('//tr[@class="data1"]/td[5]/b')
    ctches = content.xpath('//tr[@class="data1"]/td[6]')
    stumpgs = content.xpath('//tr[@class="data1"]/td[7]')
    ctaswk = content.xpath('//tr[@class="data1"]/td[8]')
    ctasfr = content.xpath('//tr[@class="data1"]/td[9]')
    maxdprinn = content.xpath('//tr[@class="data1"]/td[10]')
    disprinn = content.xpath('//tr[@class="data1"]/td[11]')
	
    fldrs = [flr.text for flr in fields]
    cou = [c.tail for c in ct]
    tf = [tmr.text for tmr in timeframe]
    mtch = [mt.text for mt in match]
    inn = [ig.text for ig in innig]
    dis = [dm.text for dm in dismls]
    ctch = [cch.text for cch in ctches]
    stump = [st.text for st in stumpgs]
    cwk = [ckpr.text for ckpr in ctaswk]
    cfr = [cflr.text for cflr in ctasfr]
    mdpi = [mdp.text for mdp in maxdprinn]
    dpi = [dprin.text for dprin in disprinn]
	
    fielders.extend(fldrs)
    country.extend(cou)
    span.extend(tf)
    matches.extend(mcth)
    innings.extend(inn)
    dismissals.extend(dis)
    catches.extend(ctch)
    stumpings.extend(stump)
    catcheswktkpr.extend(cwk)
    catchesfielder.extend(cfr)
    maxdismissalsinns.extend(mdpi)
    dismissalsperinns.extend(dpi)
    zipped = zip(fielders,country,span,matches,innings,dismissals,catches,stumpings,catcheswktkpr,catchesfielder,maxdismissalsinns,dismissalsperinns)
    for row in zipped:
        out.writerow(row)
        zipped = None