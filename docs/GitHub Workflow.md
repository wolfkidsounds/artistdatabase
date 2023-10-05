<p><a target="_blank" href="https://app.eraser.io/workspace/W0q4SHuyJ9ebeo4KUZSr" id="edit-in-eraser-github-link"><img alt="Edit in Eraser" src="https://firebasestorage.googleapis.com/v0/b/second-petal-295822.appspot.com/o/images%2Fgithub%2FOpen%20in%20Eraser.svg?alt=media&amp;token=968381c8-a7e7-472a-8ed6-4a6626da5501"></a></p>

Dieses Dokument beschreibt wie Versionierung entsteht.

Dabei arbeiten wir mit einer Mischung aus Versionierung und sogenanntem "Trunk-Based-Development".



Alles beginnt Auf euer Lokalen Maschine (PC).

Ihr Arbeitet mit dem Lokalen Server und macht Änderungen am Code.

![local](/.eraser/W0q4SHuyJ9ebeo4KUZSr___Aice6h6JxvNwzixxntyeJbPDVnp2___---figure---YR34mjfqjKHc1oR3R-QBv---figure---iuaN4qOdTtzpugmLflVw0Q.png "local")

---

Anschließend definiert ihr ein Feature daraus (zB. Benutzer-Ansicht).

Ihr erzeugt anschließend einen "Feature-Branch". - Ist euer Feature fertig, startet ihr einen Pull-Request.

Dieser Request startet eine Automatische Abfolge von "Actions" welche ihr in eurem Pull-Request sehen könnt. Dabei durchläuft euer Code verschiedene Test.

![feature](/.eraser/W0q4SHuyJ9ebeo4KUZSr___Aice6h6JxvNwzixxntyeJbPDVnp2___---figure---24DhE_3rn9VX8FwUdj4X7---figure---ngYiXRVQQUWHr-AA-AFApg.png "feature")

Ist der Code erfolgreich getestet worden, könnt ihr diesen Abschließen mit einem "Merge".

Anschließend definiert ihr eine neue "Version" der App (zB. 0.1.8).

Nun beginnt der Prozess, dass wir unterschiedliche Features zusammenfassen in dieser Version. Ist alles fertig starten wir erneut einen Pull-Request auf den "Master".

![version](/.eraser/W0q4SHuyJ9ebeo4KUZSr___Aice6h6JxvNwzixxntyeJbPDVnp2___---figure---GzXcjCPqL1oOGtpvZdk0G---figure---OfNJng5wqvqQDQm1FnZvgw.png "version")

Sind alle "Acions" erfolgreich durchlaufen und der Pull-Request kann abgeschlossen werden findet ein erneuter "Merge" statt.



Es wird anschließend ein neuer "Branch" erstellt, neue Version mit neuen Features und der Prozess beginnt von vorn.

![workflow](/.eraser/W0q4SHuyJ9ebeo4KUZSr___Aice6h6JxvNwzixxntyeJbPDVnp2___---figure---xKI-v1Wf37CTloXwt6b7M---figure---BQOeHyONIhPUiOd_wC0i9Q.png "workflow")




<!--- Eraser file: https://app.eraser.io/workspace/W0q4SHuyJ9ebeo4KUZSr --->