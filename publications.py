from pybtex.database import parse_file
bib = parse_file("papers.bib")

with open("temp.html", "w", encoding="utf-8") as f:
    for entry in bib.entries:
        paper = bib.entries[entry]
        print(paper)
        authors = ", ".join([" ".join(str(p).split(", ")[::-1]) for p in paper.persons["author"]])
        event = paper.fields.get("booktitle", paper.fields.get("journal", ""))
        url = "https://doi.org/" + paper.fields["doi"] if ("doi" in paper.fields) else paper.fields["url"]
        
        categories = ["all"]
        categories.append(paper.fields['year'])
        if paper.type == "inproceedings":
            categories.append("conference")
        elif paper.type == "article":
            categories.append("journal")
        elif paper.type == "mastersthesis" or paper.type == "phdthesis":
            categories.append("thesis")
        elif paper.type == "patent":
            categories.append("patent")

        for keyword in paper.fields["keywords"].split(" "):
            categories.append(keyword)
            if keyword == "award":
                print(keyword)

        strcat = "\"category_" + ("\", \"category_".join(categories)) + "\""

        print(entry, " - ", paper.type, " - ", paper.fields["title"], " - ", paper.fields["year"], " - ", authors, " - ", event)

        f.write(f"                          <figure class=\"item standard\" data-groups='[{strcat}]'>\n")
        f.write(f"                            <div class=\"portfolio-item-img\">\n")
        f.write(f"                              <img src=\"papers/pnginv/{entry}.png\" alt=\"{event} {paper.fields['year']}\" title="" />\n")
        f.write(f"                              <a href=\"{url}\" target=\"_blank\"></a>\n")
        f.write(f"                            </div>\n\n")
        f.write(f"                            <i class=\"far fa-file-alt\"></i>\n")
        f.write(f"                            <h4 class=\"name\" style=\"padding-bottom: 0px;\">{paper.fields['title']}</h4>\n")
        f.write(f"                            <span style=\"font-style: italic;\">{authors}</span><br/>\n")
        f.write(f"                            <span style=\"font-weight: 800;\">{event} {paper.fields['year']}</span>\n")
        if "note" in paper.fields:
            f.write(f"                            <br/><span style=\"font-weight: 800; color: #6969FF\">{paper.fields['note']}</span>\n")
        f.write(f"                            <span class=\"category\">{event} {paper.fields['year']}</span>\n")
        f.write(f"                          </figure>\n\n")

#print(bib_data.entries['Knuth:TB8-1-14'].fields['title'])
#
#for author in bib_data.entries['Knuth:TB8-1-14'].persons['author']:
#ppi    print(unicode(author))