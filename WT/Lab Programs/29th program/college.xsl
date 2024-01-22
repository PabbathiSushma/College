<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <body>
                <h1>Student Details</h1>
                <table border="1" width="20%" height="20%">
                    <tr>
                        <th>Sid</th>
                        <th>Sname</th>
                    </tr>
                    <xsl:for-each select="college/student">
                        <tr>
                            <td>
                                <xsl:value-of select="id" />
                            </td>
                            <td>
                                <xsl:value-of select="name" />
                            </td>
                        </tr>
                    </xsl:for-each>
                </table>

                <h1>Staff Details </h1>
                <table border="1" width="20%" height="20%">
                    <tr>
                        <th>Fid</th>
                        <th>Fname</th>
                    </tr>
                    <xsl:for-each select="college/staff">
                        <tr>
                            <td>
                                <xsl:value-of select="id" />
                            </td>
                            <td>
                                <xsl:value-of select="name" />
                            </td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>